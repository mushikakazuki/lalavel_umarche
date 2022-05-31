<x-tests.app>
    <x-slot name="header">
        ヘッダー１
    </x-slot>
    コンポーネントテスト

    <x-tests.card title="タイトル" content="本文" :message=$message />
    <br>
    <x-tests.card title="タイトル2" />
    <br>
    <x-tests.card title="CSS" class='bg-blue-300'/>
    <x-test-class-base />
</x-tests.app>
