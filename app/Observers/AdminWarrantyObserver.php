<?php

namespace App\Observers;

use App\Models\FlashMessage;
use App\Models\Mobile_warranty;

class AdminWarrantyObserver
{
    /**
     * Handle the Mobile_warranty "created" event.
     *
     * @param  \App\Models\Mobile_warranty  $mobile_warranty
     * @return void
     */
    public function created(Mobile_warranty $mobile_warranty)
    {
        session()->flash('createAdminWarranty',FlashMessage::query()->where('title','AdminWarranty_create')->first());
    }

    /**
     * Handle the Mobile_warranty "updated" event.
     *
     * @param  \App\Models\Mobile_warranty  $mobile_warranty
     * @return void
     */
    public function updated(Mobile_warranty $mobile_warranty)
    {
        //
    }

    /**
     * Handle the Mobile_warranty "deleted" event.
     *
     * @param  \App\Models\Mobile_warranty  $mobile_warranty
     * @return void
     */
    public function deleted(Mobile_warranty $mobile_warranty)
    {
        //
    }

    /**
     * Handle the Mobile_warranty "restored" event.
     *
     * @param  \App\Models\Mobile_warranty  $mobile_warranty
     * @return void
     */
    public function restored(Mobile_warranty $mobile_warranty)
    {
        //
    }

    /**
     * Handle the Mobile_warranty "force deleted" event.
     *
     * @param  \App\Models\Mobile_warranty  $mobile_warranty
     * @return void
     */
    public function forceDeleted(Mobile_warranty $mobile_warranty)
    {
        //
    }
}
