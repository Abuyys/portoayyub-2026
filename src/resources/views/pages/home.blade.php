<x-layouts.app>

    <x-header />

    <x-hero :profile="$profile" />

    <x-about :profile="$profile" />

    <x-education :educations="$educations" />

    <x-projects :projects="$projects" />

    <x-experience :experiences="$experiences" />

    <x-skills :skills="$skills" />

    <x-certifications :certifications="$certifications" />

    <x-cta :profile="$profile" />

    <x-footer :profile="$profile" />

</x-layouts.app>