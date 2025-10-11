@props(['label', 'name','helperText'=>'Use New Line For New Sentence'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full',
        'rows' => 4,
    ];
@endphp

<x-forms.field :$label :$name>
    
    <textarea {{  $attributes($defaults)  }}>{{old($name)}}</textarea>
    <small class="text-blue-400">{{$helperText }}</small>
</x-forms.field>