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
        <q-list dense bordered class="rounded-borders">
          <q-item v-for="(c,i) in carriles" :key="i" v-ripple :class="c.estado?'bg-red-6':''">
            <q-item-section>
              <q-checkbox @update:model-value="cambio(c)"  v-model="c.estado" :label="(i+1).toString()" left-label />
            </q-item-section>
            <q-item-section>
              <q-item-label >
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
        <q-card-section class="q-pt-none">
<!--          Click/Tap on the backdrop.-->
          <pre>{{carril}}</pre>
          <q-input @keyup="buscar" ref="placa" outlined label="placa" v-model="carril.placa" dense style="text-transform: uppercase" />
          <q-input outlined label="conductor" v-model="carril.conductor" dense />
          <q-input outlined label="carril" v-model="carril.carril" dense />
          <q-input outlined label="nivel" v-model="carril.nivel" dense />
          <q-input outlined label="fechaingreso" v-model="carril.fechaingreso" dense />
          <q-input outlined label="horaingreso" v-model="carril.horaingreso" dense />
        </q-card-section>
        <q-card-actions align="right" class="bg-white text-teal">
          <q-btn flat label="CANCELAR" @click="this.carril.estado=false;this.insertar=false" color="negative" icon="delete"></q-btn>
          <q-btn flat label="CREAR" v-close-popup icon="send"/>
        </q-card-actions>
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
        {carril:1,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:2,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:3,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:4,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:5,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:6,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:7,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:8,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:9,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:10,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:11,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:12,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:13,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:14,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:15,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:16,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:17,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:18,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:19,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:20,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:21,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:22,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:23,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:24,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:25,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:26,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:27,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:28,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:29,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:30,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:31,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:32,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:33,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:34,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:35,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:36,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:37,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:38,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:39,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:40,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:40,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:41,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:42,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:43,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:44,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:46,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:47,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:48,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:49,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:50,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:51,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:52,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:53,conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:53,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:54,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:55,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:56,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:57,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:58,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:59,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:60,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:61,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:62,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:63,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:64,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:65,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:66,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:67,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:68,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:69,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:70,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:71,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:72,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:73,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:74,conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:75,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:76,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:77,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:78,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:79,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:80,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:81,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:82,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:83,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:84,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:85,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:86,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:87,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:88,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:89,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:90,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:91,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:92,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:93,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:94,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:95,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:96,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:97,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:98,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:99,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:100,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:101,conductor:'',nivel:'1°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
      ],
      carril:{}
    }
  },
  methods:{
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
