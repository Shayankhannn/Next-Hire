@props(['label', 'name','value'=> ''])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full',
        'rows' => 4,
                'value' => $value ?? '',

    ];
@endphp

<x-forms.field :$label :$name>
    
    <textarea {{  $attributes($defaults)  }}>{{old($name,$value)}}</textarea>
    <small class="text-blue-400"> 💡 Tip: Write each point on a new line to show them as bullet points.</small>
</x-forms.field>