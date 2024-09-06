@php
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $placeholder ??= '';
@endphp

<div class="{{$class}}">
    <input type="text" class="form-control">
</div>