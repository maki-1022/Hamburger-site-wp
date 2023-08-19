        <aside class="l-sidebar p-sidebar js-menu">
            <h2 class="p-sidebar__heading">Menu</h2>
            <ul class="p-sidebar__block">
                <!-- カスタムメニューの呼び出し -->
                <?php wp_nav_menu( array (
                    'theme_location' => 'category_nav'
                ) ); ?>
                <li class="p-sidebar__menu"><h3>バーガー</h3>
                    <ul class="p-sidebar__list">
                        <li class="p-sidebar__item">ハンバーガー</li>
                        <li class="p-sidebar__item">チーズバーガー</li>
                        <li class="p-sidebar__item">テリヤキバーガー</li>
                        <li class="p-sidebar__item">アボカドバーガー</li>
                        <li class="p-sidebar__item">フィッシュバーガー</li>
                        <li class="p-sidebar__item">ベーコンバーガー</li>
                        <li class="p-sidebar__item">チキンバーガー</li>
                    </ul>
                </li>
                <li class="p-sidebar__menu"><h3>サイド</h3>
                    <ul class="p-sidebar__list">
                        <li class="p-sidebar__item">ポテト</li>
                        <li class="p-sidebar__item">サラダ</li>
                        <li class="p-sidebar__item">ナゲット</li>
                        <li class="p-sidebar__item">コーン</li>
                    </ul>
                </li>
                <li class="p-sidebar__menu"><h3>ドリンク</h3>
                    <ul class="p-sidebar__list">
                        <li class="p-sidebar__item">コーラ</li>
                        <li class="p-sidebar__item">ファンタ</li>
                        <li class="p-sidebar__item">オレンジ</li>
                        <li class="p-sidebar__item">アップル</li>
                        <li class="p-sidebar__item">紅茶（Ice/Hot）</li>
                        <li class="p-sidebar__item">コーヒー（Ice/Hot）</li>
                    </ul>
                </li>
            </ul>
        </aside>