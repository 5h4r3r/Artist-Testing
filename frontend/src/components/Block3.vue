
  <template>
  <div id="block3">
    <div class="block3-content">
      <div class="block3-title">
        <img src="../assets/block3/block3_title.webp" alt="НЕМНОГО ЦИФР" />
      </div>
      <div class="block3-item1">
        <img src="../assets/block3/block3_item1.webp" alt="20 лет" />
        <p>на рынке СМИ</p>
      </div>
      <div class="block3-item2">
        <img src="../assets/block3/block3_item2.webp" alt="более 1000" />
        <p>клиентов</p>
      </div>
      <div class="block3-item3">
        <img src="../assets/block3/block3_item3.webp" alt="13 наград" />
        <p>
          и премий на крнкурсах <br />
          рекламы
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Block3",
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#block3 {
  height: 330px;
  background-image: url("../assets/Layer_4.png");
  display: grid;
  grid-template-columns: auto minmax(auto, 900px) auto;
}
.block3-content {
  grid-column: 2 / 3;
  display: grid;
  grid-template-columns: repeat(3, auto);
  grid-template-rows: repeat(auto-fit, auto);
   column-gap: 1.5em;
  .block3-title {
    grid-column: 1 / -1;
    justify-self: center;
    align-self: center;
    h2 {
      font-size: 30pt;
    }
  }
  // Общие параметры  block3-item
  %item-parm {
    justify-self: center;
    text-align: center;
    //grid-row: 2 / 3;
    p {
      color: white;
      font-size: 14pt;
    }
  }
  .block3-item1 {
    @extend %item-parm;
    justify-self: right;
  }
  .block3-item2 {
    @extend %item-parm;
  }
  .block3-item3 {
    justify-self: left;
    @extend %item-parm;
  }
}

@media all and (max-width: 1024px) {
  #block3 {
    height: 100%;
    background-size: cover;
    grid-template-columns: auto minmax(500px, 1fr) auto;
  }
  .block3-content {
    grid-template-columns: repeat(1, minmax(480px, 2fr));
    grid-template-rows: repeat(auto-fit, auto);
      .block3-title {
        margin-top: 5%;
    margin-bottom: 2%;
  }
    .block3-item1 {
    justify-self: center;
  }
  .block3-item3 {
    justify-self: center;
  }
  }
}
</style>
