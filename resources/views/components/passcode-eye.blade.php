@props(['datatarget'])

<div class="form-control-wrap">
<a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="{{ $datatarget }}">
<em class="passcode-icon icon-show icon ni ni-eye"></em>
<em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
</a>
{{ $slot }}
</div>