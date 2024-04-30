<!DOCTYPE html>
<html class="is-large is-secondary">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- 核心：Tocas UI -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocas/4.2.5/tocas.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tocas/4.2.5/tocas.min.js"></script>

  <!-- 字體：Noto Sans TC -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700&display=swap" rel="stylesheet" />
  <title>結帳表單 - Tocas UI</title>
</head>

<body>
  <div class="ts-container is-narrow has-vertically-padded-big">
    <a href="#" class="ts-button is-icon is-secondary">
      <span class="ts-icon is-chevron-left-icon"></span>
    </a>
    <div class="ts-header is-big is-icon is-heavy">
      <div class="ts-icon is-cart-shopping-icon"></div>
      結帳
    </div>
    <div class="ts-grid is-relaxed has-top-spaced-big">
      <div class="column is-10-wide">
        <div class="ts-grid is-middle-aligned">
          <div class="column is-fluid">
            <div class="ts-header is-heavy is-secondary">購物項目</div>
          </div>
          <div class="column">
            <div class="ts-text is-secondary">
              下訂日期：
              <span>2024/01/01</span>
            </div>
          </div>
        </div>
        <div class="ts-box has-top-spaced">
          <div class="ts-content is-dense">
            <div class="ts-grid">
              <div class="column is-fluid">
                <span class="ts-text is-label">神秘筆記本</span>
              </div>
              <div class="column">
                <div class="ts-wrap">
                  <div class="ts-badge">3</div>
                  <span class="ts-text is-description">$15</span>
                </div>
              </div>
            </div>
            <div class="ts-text is-description is-truncated">這是一個充滿神秘力量的筆記本。</div>
          </div>
          <div class="ts-divider"></div>
          <div class="ts-content is-dense">
            <div class="ts-grid">
              <div class="column is-fluid">
                <span class="ts-text is-label">橡皮擦</span>
              </div>
              <div class="column">
                <span class="ts-text is-description">$5</span>
              </div>
            </div>
            <div class="ts-text is-description is-truncated">能夠抹去一切存在的神奇小擦擦。</div>
          </div>
          <div class="ts-divider"></div>
          <div class="ts-content is-dense">
            <div class="ts-grid">
              <div class="column is-fluid">
                <span class="ts-text is-label">紅茶</span>
              </div>
              <div class="column">
                <span class="ts-text is-description">$10</span>
              </div>
            </div>
            <div class="ts-text is-description is-truncated">雖然我覺得咖啡也不錯。</div>
          </div>
          <div class="ts-divider"></div>
          <div class="ts-content is-dense">
            <div class="ts-grid">
              <div class="column is-fluid">總計（新台幣）</div>
              <div class="column">
                <span class="ts-text is-bold">$25</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-6-wide">
        <div class="ts-header is-heavy is-secondary">購物資訊</div>
        <div class="ts-grid is-relaxed">
          <div class="column is-16-wide">
            <div class="ts-text is-label has-top-spaced">用戶名</div>
            <div class="ts-input is-start-labeled has-top-spaced">
              <span class="label">@</span>
              <input type="text" />
            </div>
          </div>
          <div class="column is-16-wide">
            <button class="ts-button is-fluid">確定購買</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>