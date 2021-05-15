<x-card-basic >
    @slot('titulo', $titulo)
    @slot('User',$User ?? null)
    @slot('Route',$Route ?? '')
    @slot('Method',$Method ?? '')
    @slot('IsNew',$IsNew ?? false)
    @slot('IsUpload',$IsUpload ?? false)
    @slot('items_forms')
        @include('layouts.User.__password')
    @endslot
    @slot('buttoms_forms')
        @include('share.bars.___foot-bar-1')
    @endslot
</x-card-basic>
