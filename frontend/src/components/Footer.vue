<template>
  <div id="footer">
    <div class="footer-content">
      <div class="footer-left">
        <p>
          г. Курган <br />
          ул. Куйбышева, 12, цокольный этаж <br />
          тел. +7 (3522) 23-23-23 <br />
          studio@artiast.ru
        </p>
      </div>
      <div class="footer-right">
        <p>© 2021 Рекламное агентство «АртИст»</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#footer {
  height: 150px;
  background-color: black;
  display: grid;
  grid-template-columns: auto minmax(auto, 900px) auto;
  .footer-content {
    grid-column: 2 / 3;
    display: grid;
    grid-template-columns: repeat(3, minmax(300px, auto));
    p {
      color: white;
       padding-top: 10%;
       padding-bottom: 10%;
    }
    .footer-left {
      grid-column: 1 / 2;
      align-self: center;
    }
    .footer-right {
      grid-column: 3 / 4;
      align-self: end;
    }
  }
}
@media all and (min-width: 480px) and (max-width: 768px) {
 #footer {
  height: 350px;
  background-color: black;
  display: grid;
  grid-template-columns: auto ;
  .footer-content {
    grid-column: 1 / 2;
    display: grid;
    grid-template-columns:  minmax(300px, auto);
    p{
      padding-top: 10%;
      padding-bottom: 10%;
    }
    .footer-left {
      grid-column: 1 / 2;
      grid-row: 1/1;
      justify-self: center;
      align-self: center;
      text-align: center;
    }
    .footer-right {
      grid-column: 1 / 2;
      grid-row: 1/1;
     justify-self: center;
      align-self: end;
      text-align: center;
    }
  }
}
}
</style>