<template>
  <q-page class="q-pa-xs">
<!--    <img-->
<!--      alt="Quasar logo"-->
<!--      src="~assets/quasar-logo-vertical.svg"-->
<!--      style="width: 200px; height: 200px"-->
<!--    >-->
    <div class="row">
      <div class="col-2">
        <q-badge color="teal" class="full-width">SOTANO</q-badge>
        <q-list style="padding: 0px;margin: 0px;border: 0px" dense bordered class="rounded-borders">
          <q-item style="padding: 0px;margin: 0px;border: 0px" v-for="(c,i) in carriles" :key="i" v-ripple :class="c.estado?'bg-red-6':''">
            <q-item-section style="padding: 0px;margin: 0px;border: 0px" v-if="i=>0 && i<53">
              <q-checkbox style="padding: 0px;margin: 0px;border: 0px" @update:model-value="cambio(c)"  v-model="c.estado" :label="(i+1).toString()" left-label />
            </q-item-section>
            <q-item-section style="padding: 0px;margin: 0px;border: 0px">
              <q-item-label style="padding: 0px;margin: 0px;border: 0px">
                {{c.placa}}
              </q-item-label>
            </q-item-section>
          </q-item>
        </q-list>
      </div>
    </div>
    <q-dialog v-model="insertar">
      <q-card >
<!--        style="width: 700px; max-width: 80vw;"-->
        <q-card-section>
          <div class="text-h6">REGISTRO INGRESO DE VEHICULOS</div>
        </q-card-section>
        <q-form @submit="crear">
        <q-card-section class="q-pt-none">
<!--          Click/Tap on the backdrop.-->
<!--          <pre>{{carril}}</pre>-->
          <q-input required @keyup="buscar" ref="placa" outlined label="placa" v-model="carril.placa" dense style="text-transform: uppercase" />
          <q-input required outlined label="conductor" v-model="carril.conductor" dense />
          <q-input outlined label="carril" v-model="carril.carril" dense />
          <q-input outlined label="nivel" v-model="carril.nivel" dense />
          <q-input outlined label="fechaingreso" v-model="carril.fechaingreso" dense />
          <q-input outlined label="horaingreso" v-model="carril.horaingreso" dense />
          <q-select :options="['HORAS']" outlined label="tipo" v-model="carril.tipo" dense />
        </q-card-section>
        <q-card-actions align="right" class="bg-white text-teal">
          <q-btn flat label="CANCELAR" @click="this.carril.estado=false;this.carril.placa='';this.carril.conductor='';this.insertar=false" color="negative" icon="delete"></q-btn>
<!--          <q-btn flat label="CREAR" v-close-popup icon="send"/>-->
          <q-btn flat label="CREAR"  icon="send" type="submit"/>
        </q-card-actions>
        </q-form>
      </q-card>
    </q-dialog>
  </q-page>
</template>

<script>
import { date } from 'quasar'
export default {
  data(){
    return{
      insertar:false,
      carriles:[
        {carril:1,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:2,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:3,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:4,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:5,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:6,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:7,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:8,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:9,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:10,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:11,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:12,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:13,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:14,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:15,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:16,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:17,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:18,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:19,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:20,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:21,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:22,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:23,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:24,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:25,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:26,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:27,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:28,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:29,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:30,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:31,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:32,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:33,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:34,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:35,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:36,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:37,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:38,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:39,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:40,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:40,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:41,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:42,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:43,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:44,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:46,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:47,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:48,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:49,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:50,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:51,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:52,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:53,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:53,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:54,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:55,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:56,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:57,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:58,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:59,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:60,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:61,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:62,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:63,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:64,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:65,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:66,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:67,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:68,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:69,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:70,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:71,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:72,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:73,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:74,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:75,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:76,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:77,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:78,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:79,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:80,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:81,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:82,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:83,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:84,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:85,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:86,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:87,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:88,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:89,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:90,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:91,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:92,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:93,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:94,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:95,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:96,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:97,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:98,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:99,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:100,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:101,tipo:'HORAS',conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
      ],
      carril:{}
    }
  },
  created(){
    this.misdatos();
  },
  methods:{
    misdatos(){
      this.$api.get('/parqueo').then(res=>{
        console.log(res.data)
        this.carriles.forEach(c=>{
          let found = res.data.find(r => r.carril ==  c.carril);
          if (found!=undefined){
            c.estado=true
            c.placa=found.placa
          }
        })
      })
    },
    crear(){
      // console.log(this.carril)
      this.$api.post('/parqueo',this.carril).then(res=>{
        // console.log(res.data)
        this.insertar=false
      })
    },
    buscar(){
      this.carril.conductor=''
      this.$api.get('/parqueo/'+this.carril.placa).then(res=>{
        // console.log(res.data)
        if (res.data.length>0){
          this.carril.conductor=res.data[0].conductor
        }
      })
    },
    cambio(carril){
      this.carril=carril
      this.carril.fechaingreso=date.formatDate(Date.now(),'YYYY-MM-DD')
      this.carril.horaingreso=date.formatDate(Date.now(),'HH:mm:ss')
      if (!carril.estado){
        this.$nextTick(() => {
          setTimeout(() => {
            this.$refs.placa.$el.focus()
          }, 20)
        })
        this.insertar=true
      }
    }
  }
}
</script>
