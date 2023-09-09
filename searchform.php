<!-- 検索フォーム -->
<form class="p-search" action="<?php esc_url( home_url('/') ); ?>" method="get"> <!-- トップページのURLを取得 -->
    <!-- inputタグ内のname・id属性をsにする -->
    <!-- value属性：検索窓に入れた検索ワードを取得して後から作成する検索結果の方に表示する -->
    <input type="text" class="p-search__text c-input" name="s" id="s" value="<?php the_search_query(); ?>" > 
    <button type="submit" class="p-search__button c-button">検索</button>
</form>