<!-- 検索フォーム -->
<form class="p-search" action="<?php home_url('/'); ?>" method="get"> <!-- トップページのURLを取得 -->
    <input type="text" class="p-search__text c-input" name="s" id="s" > <!-- inputタグ内のname・id属性をsにする -->
    <button type="submit" class="p-search__button c-button">検索</button>
</form>