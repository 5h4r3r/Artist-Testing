<template>
  <div id="block6">
    <div class="block6-content">
      <div class="block6-title"><h2>С НАМИ РАБОТАЮТ</h2></div>
      <div class="block6-item1">
        <img src="../assets/block6/block6_item1.png" />
      </div>
      <div class="block6-item2">
        <img src="../assets/block6/block6_item2.png" />
      </div>
      <div class="block6-item3">
        <img src="../assets/block6/block6_item3.png" />
      </div>
      <div class="block6-item4">
        <img src="../assets/block6/block6_item4.png" />
      </div>
      <div class="block6-item5">
        <img src="../assets/block6/block6_item5.png" />
      </div>
      <div class="block6-item6">
        <img src="../assets/block6/block6_item6.png" />
      </div>
      <div class="block6-item7">
        <img src="../assets/block6/block6_item7.png" />
      </div>
      <div class="block6-item8">
        <img src="../assets/block6/block6_item8.png" />
      </div>
      <div class="block6-item9">
        <img src="../assets/block6/block6_item9.png" />
      </div>
      <div class="block6-item10">
        <img src="../assets/block6/block6_item10.png" />
      </div>
      <div class="block6-item11">
        <img src="../assets/block6/block6_item11.png" />
      </div>
      <div class="block6-item12">
        <img src="../assets/block6/block6_item12.png" />
      </div>
      <div class="block6-item13">
        <img src="../assets/block6/block6_item13.png" />
      </div>
      <div class="block6-item14">
        <img src="../assets/block6/block6_item14.png" />
      </div>
      <div class="block6-item15">
        <img src="../assets/block6/block6_item15.png" />
      </div>
      <div class="block6-item16">
        <img src="../assets/block6/block6_item16.png" />
      </div>
      <div class="block6-item17">
        <img src="../assets/block6/block6_item17.png" />
      </div>
      <div class="block6-item18">
        <img src="../assets/block6/block6_item18.png" />
      </div>
      <div class="block6-item19">
        <img src="../assets/block6/block6_item19.png" />
      </div>
      <div class="block6-item20">
        <img src="../assets/block6/block6_item20.png" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Block6",
};
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#block6 {
  height: 660px;
  background-color: white;
  display: grid;
  grid-template-columns: auto minmax(auto, 900px) auto;
}
.block6-content {
  grid-column: 2 / 3;
  display: grid;
  grid-template-columns: repeat(4, auto);
  grid-template-rows: repeat(auto-fit, auto);
  .block6-title {
    grid-column: 1 / -1;
    // grid-row: 1 / 2;
    justify-self: center;
    align-self: center;
  }
  // Общие параметры  block-item
  %item-parm {
    align-self: center;
    justify-content: space-around;
  }
  %row2 {
    // grid-row: 2 / 3;
  }
  %row3 {
    //grid-row: 3 / 4;
  }
  %row4 {
    //grid-row: 4 / 5;
  }
  %row5 {
    //grid-row: 5 / 6;
  }
  %row6 {
    //grid-row: 6 / 7;
  }
  %column1 {
    justify-self: center;
    //grid-column: 1 / 2;
  }
  %column2 {
    justify-self: center;
    //grid-column: 2 / 3;
  }
  %column3 {
    justify-self: center;
    //grid-column: 3 / 4;
  }
  %column4 {
    justify-self: center;
    //grid-column: 4 / 5;
  }
  //row1
  .block6-item1 {
    @extend %item-parm;
    @extend %row2;
    @extend %column1;
  }
  .block6-item2 {
    @extend %item-parm;
    @extend %row2;
    @extend %column2;
  }
  .block6-item3 {
    @extend %item-parm;
    @extend %row2;
    @extend %column3;
  }
  .block6-item4 {
    @extend %item-parm;
    @extend %row2;
    @extend %column4;
  }
  .block6-item5 {
    @extend %item-parm;
    @extend %row3;
    @extend %column1;
  }
  .block6-item6 {
    @extend %item-parm;
    @extend %row3;
    @extend %column2;
  }
  .block6-item7 {
    @extend %item-parm;
    @extend %row3;
    @extend %column3;
  }
  .block6-item8 {
    @extend %item-parm;
    @extend %row3;
    @extend %column4;
  }
  .block6-item9 {
    @extend %item-parm;
    @extend %row4;
    @extend %column1;
  }
  .block6-item10 {
    @extend %item-parm;
    @extend %row4;
    @extend %column2;
  }
  .block6-item11 {
    @extend %item-parm;
    @extend %row4;
    @extend %column3;
  }
  .block6-item12 {
    @extend %item-parm;
    @extend %row4;
    @extend %column4;
  }
  .block6-item12 {
    @extend %item-parm;
    @extend %row4;
    @extend %column4;
  }
  .block6-item13 {
    @extend %item-parm;
    @extend %row5;
    @extend %column1;
  }
  .block6-item14 {
    @extend %item-parm;
    @extend %row5;
    @extend %column2;
  }
  .block6-item15 {
    @extend %item-parm;
    @extend %row5;
    @extend %column3;
  }
  .block6-item16 {
    @extend %item-parm;
    @extend %row5;
    @extend %column4;
  }
  .block6-item17 {
    @extend %item-parm;
    @extend %row6;
    @extend %column1;
    justify-self: right;
  }
  .block6-item18 {
    @extend %item-parm;
    @extend %row6;
    @extend %column2;
  }
  .block6-item19 {
    @extend %item-parm;
    @extend %row6;
    @extend %column3;
  }
  .block6-item20 {
    @extend %item-parm;
    @extend %row6;
    @extend %column4;
    justify-self: left;
  }
}
@media all and (min-width: 768px) and (max-width: 1024px) {
  #block6 {
    height: 1400px;
    background-color: white;
    display: grid;
    grid-template-columns: auto minmax(500px, 1fr) auto;
  }
  .block6-content {
    grid-column: 1 / 4;
    display: grid;
    grid-template-columns: repeat(2, 400px);
    grid-template-rows: repeat(auto-fill, auto);
    grid-gap: 2%;
    column-gap: 5%;
    justify-self: center;
    align-items: center;
  .block6-item17 {
     justify-self: center;
  }
  .block6-item20 {
     justify-self: center;
  }
  
  } 
}
@media all and (min-width: 480px) and (max-width: 768px) {
  #block6 {
    height: 2800px;
    background-color: white;
    display: grid;
    grid-template-columns: auto minmax(500px, 1fr) auto;
  }
  .block6-content {
    grid-column: 1 / 4;
    display: grid;
    grid-template-columns: repeat(1, minmax(480px, 2fr));
    grid-template-rows: repeat(auto-fit, auto);
    grid-gap: 1%;
    //justify-self: center;
    //align-items: center;
  .block6-item17 {
     justify-self: center;
  }
  .block6-item20 {
     justify-self: center;
  }
  
  } 
}
</style>