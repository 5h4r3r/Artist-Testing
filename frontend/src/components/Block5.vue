
  <template>
  <div id="block5">
    <div class="block5-content">
    <div class="block5-title"><h2>НАГРАДЫ</h2></div>
    <div class="block5-item">
      <img src="../assets/block5/block5_item1.png" alt="20 лет" />
      <ul>
        <li>1997г. — диплом лауреата, видеоролик «Обходчик»</li>
        <li>2003г. — диплом
        лауреата, видеоролик «Дурак»</li>
        <li>2005г. — диплом за I место, видеоролики
        «Казарма», «Трусы», «Футбол», «8цветков»</li>
        <li>2009г. — диплом за III место,
        видеоролики «Березень»</li>
      </ul>
    </div>
    <div class="block5-item">
      <img src="../assets/block5/block5_item2.png" alt="более 1000" />
      <ul>
        <li>2002г. — диплом за II место, видеоролик «Бабульки»</li>
        <li>2003г. — диплом за III место, видеоролики «Кристал разгуляй 20», «ПМТ»</li>
        <li>2003г. — диплом за II место, видеоролики «Казарма», «Молния гномы 25»</li>
        <li>2003г. — диплом за I место, видеоролик «Альфа-база 36»</li>
        <li>2004г. — диплом за II место, видеоролик «Казарма»</li>
      </ul>
    </div>
    <div class="block5-item">
      <img src="../assets/block5/block5_item3.png" alt="13 наград" />
      <ul>
        <li>2004г. — диплом финалиста, видеоролик «Трусы»</li>
        <li>2006г. — диплом за III место, видеоролик «Шеврон»</li>
      </ul>
    </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Block5",
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#block5 {
  height: 660px;
  background: linear-gradient(to top, #e7b219, #f9dd0a);
  display: grid;
  grid-template-columns: auto minmax(auto, 900px) auto;
}
.block5-content {
  grid-column: 2 / 3;
  display: grid;
  grid-template-columns: repeat(3, auto);
  grid-template-rows: repeat(auto-fit, auto);
  column-gap: 1.5em;
  .block5-title {
    grid-column: 1 / -1;
    justify-self: center;
    align-self: center;
    h2 {
      font-size: 30pt;
    }
  }
  // Общие параметры  block-item
  .block5-item {
    justify-self: center;
    text-align: center;
    grid-row: 2 / 3;
    line-height: 1.5;
    ul{
      text-align: left;
      padding-left: 4%;
    }
  }
}
</style>
