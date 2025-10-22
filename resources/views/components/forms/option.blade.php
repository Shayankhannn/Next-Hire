@props([
    'value',
    'name',
    'selected'
])

<option value="{{ $value }}" {{ old($name,$selected) == $value ? 'selected' : '' }} >{{ $slot }}</option>
