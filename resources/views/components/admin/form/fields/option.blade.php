@props(['value', 'option_name', 'selected'])

<option {!! $selected?? '' !!} value="{!! $value !!}">{!! $option_name !!}</option>
