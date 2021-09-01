@if(session()->has('createAdminWarranty'))

    @if(session()->get('createAdminWarranty')->title=='AdminWarranty_create_success')
        <div class="alert alert-success text-center">
            {{session()->get('createAdminWarranty')->value}}
        </div>

    @else
        <div class="alert alert-danger text-center">
            {{session()->get('createAdminWarranty')->value}}
        </div>
    @endif
@endif
