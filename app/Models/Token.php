<?php

namespace App\Models;

use Carbon\Carbon;
use Crypt;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use IPPanel\Client;
use IPPanel\Errors\Error;
use IPPanel\Errors\HttpException;
use IPPanel\Errors\ResponseCodes;
use App\Traits\Sms;


class Token extends Model
{
    use HasFactory,Sms;

    const EXPIRATION_TIME = 1; // minutes

    protected $fillable = [
        'code',
        'user_id',
        'used'
    ];

    public function __construct(array $attributes = [])
    {
        if (!isset($attributes['code'])) {
            $attributes['code'] =Crypt::encryptString($this->generateCode());
        }

        parent::__construct($attributes);
    }

    /**
     * Generate a six digits code
     *
     * @param int $codeLength
     * @return string
     */
    public function generateCode($codeLength = 4)
    {
        $max = pow(10, $codeLength);
        $min = $max / 10 - 1;
        $code = mt_rand($min, $max);
        return $code;
    }

    /**
     * User tokens relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * True if the token is not used nor expired
     *
     * @return bool
     */
    public function isValid()
    {
        return !$this->isUsed() && !$this->isExpired();
    }

    /**
     * Is the current token used
     *
     * @return bool
     */
    public function isUsed()
    {
        return $this->used;
    }

    /**
     * Is the current token expired
     *
     * @return bool
     */
    public function isExpired()
    {
        return $this->created_at->diffInMinutes(Carbon::now()) > static::EXPIRATION_TIME;
    }

    public function sendCode()
    {
        if (!$this->user) {
            throw new Exception("No user attached to this token.");
        }

        if (!$this->code) {
            $this->code = $this->generateCode();
        }

        $this->sendPattern($this->user,'9phjbgorri',['code' => strval(Crypt::decryptString($this->code))]);

        return true;
    }

}
