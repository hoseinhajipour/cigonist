@section('seo')
    @include('meta::manager', [
   'title'         => __("messages.CONTACT US") ." | ".setting('site.title'),
   'description'   =>  setting('site.description'),
   'robots'=>'index,follow',
   'referrer'=>'origin',
   'image'=>Voyager::image(setting('site.favicon')) ,
   'keywords'=>setting('site.keywords')
])
@endsection
<section class="text-white m-0 p-0">
    <img src="{{asset('images/contact-bg.jpg')}}" width="100%"/>
    <div class="container">
        <div class="card my-5 mx-lg-20 mx-1 border-0">
            <div class="card-header text-center border-0">
                <h3>{{__("messages.CONTACT US")}}</h3>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <p> {{__("messages.CONTACTUS_info")}} </p>
                </div>

                <div class="p-5">
                    <input wire:model.defer="first_name" type="text" class="form-control my-3"
                           placeholder="{{ __('messages.First Name * ') }}">
                    <input wire:model.defer="last_name" type="text" class="form-control my-3"
                           placeholder="{{ __('messages.Last Name *') }}">
                    <input wire:model.defer="email" type="email" class="form-control my-3" placeholder="{{ __('messages.Email *') }}">
                    <input wire:model.defer="company" type="text" class="form-control my-3" placeholder="{{ __('messages.Company *') }}">
                    <textarea wire:model.defer="description" class="form-control my-3"
                              placeholder="{{ __('messages.Descriptionproject') }}"></textarea>
                    <input wire:model="checked" type="checkbox" class="big_checkbox">
                    <label class="d-inline"> {{ __('messages.submitting_info') }}</label>
                </div>

            </div>
            <div class="card-footer text-center">
                <button wire:click="SubmitForm()"
                        @if($checked==false) disabled @endif
                        class="btn btn-outline-orange">
                    <div wire:loading class="text-center">
                        <div class="spinner-border" role="status">
                        </div>
                    </div>
                    <div wire:loading.remove>
                        {{ __('messages.SendMessage') }}
                    </div>
                </button>
            </div>
        </div>
    </div>


</section>
