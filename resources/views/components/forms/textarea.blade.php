@props(['label', 'name','helperText'=>'Use New Line For New Sentence'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full',
        'rows' => 4,
                'value' => old($name)

    ];
@endphp

<x-forms.field :$label :$name>
    
    <textarea {{  $attributes($defaults)  }}>{{old($name)}}</textarea>
    <small class="text-blue-400"> 💡 Tip: Write each point on a new line to show them as bullet points.</small>
</x-forms.field>