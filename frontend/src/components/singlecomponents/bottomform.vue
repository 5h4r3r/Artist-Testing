<template>
  <div id="form2">
    <form id="forma2" @submit.prevent="valid"></form>
    <label class="box1">Оставьте свои данные и мы перезвоним вам</label>
    <input
      form="forma2"
      class="form-input2 box2"
      :class="{ invalid: $v.posts.name.$error }"
      v-model="$v.posts.name.$model"
      placeholder="Имя"
    />
    <input
      form="forma2"
      class="form-input2 box3"
      :class="{ invalid: $v.posts.tel.$error }"
      v-model="$v.posts.tel.$model"
      placeholder="8 (913)"
    />
    <input
      form="forma2"
      class="button2 box4"
      type="submit"
      value="СВЯЖИТЕСЬ СО МНОЙ"
    />
  </div>
</template>

<script>
import {
  required,
  minLength,
  maxLength,
  numeric,
} from "vuelidate/lib/validators";
const mustBenember = (value) => value.indexOf("8") >= 0;
export default {
  name: "Form2",
  data() {
    return {
      posts: {
        name: "",
        tel: "",
        submitStatus: null,
      },
    };
  },
  validations: {
    posts: {
      name: {
        required,
        minLength: minLength(3),
        maxLength: maxLength(24),
      },
      tel: {
        mustBenember,
        required,
        numeric,
        minLength: minLength(11),
        maxLength: maxLength(11),
      },
    },
  },
  methods: {
    submit: function () {
      this.axios
        .post("http://localhost:3000/api/form.php", this.posts)
        .then((response) => {
          console.log(response.data);
          alert(response.data.status);
        })
        .catch((error) => {
          console.log(error);
          this.errored = true;
        });
    },
    valid: function () {
      if (this.$v.$invalid) {
        this.posts.submitStatus = "ERROR";
      } else {
        this.submit();
      }
    },
  },
};
</script>

<style lang="scss">
#form2 {
  align-self: center;
  display: grid;
  grid-template-columns: repeat(3, auto);
  grid-template-rows: repeat(2, 40px);
  grid-gap: 1% 5%;
  justify-content: space-around;
  border-radius: 17px;
  .box1 {
    display: block;
    grid-column: 1 / -1;
    grid-row: 1 / 2;
    color: white;
    text-align: center;
    font-size: 13pt;
    padding-top: 1%;
    //padding-bottom: 1%;
    margin-top: 0;
    margin-bottom: 0;
  }
  .box2 {
    display: block;
    grid-column: 1 / 2;
    grid-row: 2 / 3;
  }
  .box3 {
    display: block;
    grid-column: 2 / 3;
    grid-row: 2 / 3;
  }
  .box4 {
    display: block;
    grid-column: 3 / 4;
    grid-row: 2 / 3;
  }
  .form-input2 {
    width: 100%;
    //padding: 2%;
    //margin: 2%;
    box-sizing: border-box;
    border: 2px solid #cbcbcb;
    border-radius: 12px;

    font-family: Cuprum;
    font-size: 24px;
    font-style: normal;
    font-variant: normal;
    font-weight: 700;
    line-height: 20.4px;
  }
  .invalid {
    border: 2px solid red;
  }
  label {
    color: white;
    text-align: justify;
    // fs не работает
    // font-size: 14pt;
    // padding-top: 1%;
    //padding-bottom: 1%;
    //margin-top: 2%;
    //margin-bottom: 2%;
  }
  .button2 {
    width: 100%;
    //padding: 3.32%;
    box-sizing: border-box;
    border: 3px solid #e7b219;
    border-radius: 12px;
    background: linear-gradient(to top, #e7b219, #f9dd0a);
    color: black;
    //font
    font-family: Cuprum;
    font-size: 26px;
    font-style: normal;
    font-variant: normal;
    font-weight: 700;
    line-height: 20.4px;
    &:hover {
      background: red;
    }
  }
}
@media all and (max-width: 1024px) {
  #form2 {
    grid-template-columns: 0.5fr repeat(1, 1fr) 0.5fr;
    grid-template-rows: repeat(4, 50px);
    grid-row-gap: 5%;
    .box1 {
      display: block;
      grid-column: 2 / 3;
      grid-row: 4 / 5;
      color: white;
      text-align: center;
      font-size: 13pt;
      padding-top: 1%;
      //padding-bottom: 1%;
      margin-top: 0;
      margin-bottom: 0;
    }
    .box2 {
       height: 100%;
      display: block;
      grid-column: 2 / 3;
      grid-row: 1 / 2;
      //margin-top: 3%;
      //margin-bottom: 3%;
      //padding: 3%;
    }
    .box3 {
      height: 100%;
      display: block;
      grid-column: 2 / 3;
      grid-row: 2 / 3;
    }
    .box4 {
       height: 100%;
      display: block;
      grid-column: 2 / 3;
      grid-row: 3 / 4;
      //margin-top: 3%;
      //margin-bottom: 3%;
      //padding: 3%;
    }
  }
}
</style>