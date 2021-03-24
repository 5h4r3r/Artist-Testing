<template>
  <div id="formsegment">
    <div class="segment">
      <div class="form content">
        <form class="send-form" @submit.prevent="onSubmit">
          <p>
            <label for="name">Имя:</label>
            <input id="name" v-model="name" placeholder="Имя" />
          </p>
          <p>
            <label for="name">Email:</label>
            <input id="name" v-model="name" placeholder="name@mail.com" />
          </p>

          <p>
            <input type="submit" value="Submit" />
          </p>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "HelloWorld",
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#formsegment {
  .segment {
    background-image: url("../assets/formsegment.png");
  }
  .form {
    position: relative;
    height: 660px;
    .send-form {
      position: relative;
      display: block;
      margin-left: auto;
      margin-right: auto;
      top: 30em;
      width: 800px;
      padding: 10px;
      p {
        display: inline-block;
        padding: 1.5em;
        font-size: 16pt;
        color: #f9dd0a;
      }
      label {
        padding-right: 1em;
      }
      input {
      }
    }
  }
}
</style>