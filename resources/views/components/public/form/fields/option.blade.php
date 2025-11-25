@props(['value', 'option_name'])

<option {!! $selected?? '' !!} value="{!! $value !!}">{!! $option_name !!}</option>
