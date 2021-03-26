<template>
  <div id="formsegment">
    <div class="segment">
      <div class="form content">
        <form class="send-form" @submit.prevent="valid">
          <p>
            <label for="name">Имя:</label>
            <input :class="{ 'marker': $v.posts.name.$error }" id="name" v-model="$v.posts.name.$model" placeholder="Имя" />
          </p>
          <div class="error" v-if="$v.posts.name.$error">Минимум 3 символа</div>
          <p >
            <label for="tel">Телефон:</label>
            <input :class="{ 'marker': $v.posts.tel.$error }" id="tel" v-model="$v.posts.tel.$model" placeholder="8 (913)" />
          </p>
          <p>
            <input  type="submit" value="Submit" />
          </p>
        </form>
         <!--<button @click="mysubmit"> dd</button> -->
      </div>
    </div>
  </div>
</template>

<script>
import { required, minLength, maxLength,numeric,} from 'vuelidate/lib/validators'
const mustBenember = (value) => value.indexOf('8') >= 0
export default {
  name: "Form",
  data() {
    return {
      posts: {
        name: '',
        tel: '',
        submitStatus: null
        
      },
    }
  },
    validations: {
      posts:{
    name: {
       required,
      minLength: minLength(3),
      maxLength: maxLength(20)
    },
    tel: {
      mustBenember,
      required,
      numeric,
      minLength: minLength(11),
      maxLength: maxLength(11),
    }
      }
  },
   methods: {
        submit: function() {
              this.axios.post('http://localhost:3000/api/form.php', this.posts)
               .then(response => {
                console.log (response.data)
        }).catch(error => {
        console.log(error)
        this.errored = true
      });
        },
        valid: function() {
           if (this.$v.$invalid) {
        this.posts.submitStatus = 'ERROR'
      } else {
        this.submit()
        alert('Заявка отправлена!')
      }
    },
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
        padding: 1em;
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