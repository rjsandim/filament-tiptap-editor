@props([
    'statePath' => null,
])

<x-filament-tiptap-editor::button
    action="$wire.mountFormComponentAction('{{ $statePath }}', 'filament_tiptap_grid', {})"
    active="grid-builder"
    label="{{ trans('filament-tiptap-editor::editor.grid-builder.label') }}"
    icon="grid-builder"
/>
