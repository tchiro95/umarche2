<x-tests.app>
  <x-slot name="header">
    ヘッダー
  </x-slot>
  コンポーネントテスト１
  <x-tests.card title="タイトル１" content="本文1" :message="$message"></x-tests.card>
  <x-tests.card title="タイトル2"></x-tests.card>
</x-tests.app>
