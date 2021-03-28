<template>
  <div class="form-block">
    <div class="form-info">
      <h2>ИЗГОТОВЛЕНИЕ РЕКЛАМЫ</h2>
      <p>
        Все виды рекламных материалов от графических маетов до презинтационных
        фильмов
      </p>
    </div>
    <form @submit.prevent="valid">
      <label>Оставьте свои данные и мы перезвоним вам</label>
      <input
        class="form-input name"
        :class="{ invalid: $v.posts.name.$error }"
        id="name"
        v-model="$v.posts.name.$model"
        placeholder="Имя"
      />
      <input
        class="form-input tel"
        :class="{ invalid: $v.posts.tel.$error }"
        id="tel"
        v-model="$v.posts.tel.$model"
        placeholder="8 (913)"
      />
      <input class="button" type="submit" value="ЗАКАЗАТЬ" />
    </form>
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
  name: "Form1",
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

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
.form-block {
  position: relative;
  width: 280px;
  height: 420px;
  //padding-bottom: 145%;
  border-radius: 17px;
  background: linear-gradient(to top, #e0dfdb, #f9dd0a);
  &:hover {
    background: linear-gradient(to top, #e7b219, #f9dd0a);
  }
  .form-info {
    $margin-size: 5% !global;
    position: absolute;
    text-align: center;
    padding: 5%;
    h2 {
      margin-top: $margin-size;
      margin-bottom: $margin-size;
      line-height: 1;
      font-size: 30pt;
    }
    p {
      margin-top: $margin-size;
      margin-bottom: $margin-size;
      text-align: left;
      font-size: 14pt;
    }
  }
  form {
    position: absolute;
    top: 50%;
    display: block;
    //justify-content: center;
    //align-items: center;
    padding: 5%;
    //overflow: hidden;
  }
  .form-input {
    //width: 100%;
    padding: 2%;
    margin-top: 2%;
    margin-bottom: 2%;
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
    text-align: justify;
    font-size: 10pt;
    padding-top: 1%;
    padding-bottom: 1%;
    margin-top: 2%;
    margin-bottom: 2%;
  }
  .button {
    width: 100%;
    padding: 3.32%;
    margin-top: 2%;
    margin-bottom: 2%;
    box-sizing: border-box;
    border: 2px solid black;
    border-radius: 12px;
    background-color: #1f1f1f;
    color: white;
    //font
    font-family: Cuprum;
    font-size: 26px;
    font-style: normal;
    font-variant: normal;
    font-weight: 700;
    line-height: 20.4px;
  }

  @media all and (min-width: 768px) and (max-width: 1024px) {
    .form-block {
      position: relative;
      width: 500px;
      height: 420px;
      //padding-bottom: 30%;
      border-radius: 17px;
      background: linear-gradient(to top, #e0dfdb, #f9dd0a);
      &:hover {
        background: linear-gradient(to top, #e7b219, #f9dd0a);
      }
    }
  }
}
</style>