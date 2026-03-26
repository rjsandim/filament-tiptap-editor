@props([
    'statePath' => null,
])

<x-filament-tiptap-editor::button
    action="$wire.mountFormComponentAction('{{ $statePath }}', 'filament_tiptap_oembed', {})"
    active="oembed"
    label="{{ trans('filament-tiptap-editor::editor.video.oembed') }}"
    icon="oembed"
/>