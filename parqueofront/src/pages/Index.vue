<template>
  <q-page class="q-pa-xs">
<!--    <img-->
<!--      alt="Quasar logo"-->
<!--      src="~assets/quasar-logo-vertical.svg"-->
<!--      style="width: 200px; height: 200px"-->
<!--    >-->
    <div class="row">
      <div class="col-11">
        <div class="row">
          <div class="col-2">
            <q-badge class="bg-warning full-width text-black text-bold">SOTANO</q-badge>
            <!--        <q-list style="padding: 0px;margin: 0px;border: 0px;height: 10px" dense bordered class="rounded-borders">-->
            <!--          <q-item style="padding: 0px;margin: 0px;border: 0px;height: 10px" v-for="(c,i) in carriles" :key="i" v-ripple :class="c.estado?'bg-red-6':''">-->
            <!--            <q-item-section style="padding: 0px;margin: 0px;border: 0px;height: 10px" v-if="c.carril>=0 && c.carril<=53">-->
            <!--              <q-checkbox style="padding: 0px;margin: 0px;border: 0px;height: 10px" @update:model-value="cambio(c)"  v-model="c.estado" :label="(i+1).toString()" left-label />-->
            <!--            </q-item-section>-->
            <!--            <q-item-section style="padding: 0px;margin: 0px;border: 0px;height: 10px">-->
            <!--              <q-item-label style="padding: 0px;margin: 0px;border: 0px;height: 10px">-->
            <!--                {{c.placa}}-->
            <!--              </q-item-label>-->
            <!--            </q-item-section>-->
            <!--          </q-item>-->
            <div style="padding: 0px;margin: 0px;border: 0px;font-size: 1em"  v-for="c in carriles" :key="c.carril">
              <div v-if="c.carril>=0 && c.carril<=53" :class="c.estado?'bg-red-5':'bg-green-5'" style="height: 15px;font-size: 1em;border: 0.1px solid grey">
                <b>{{c.carril}}</b>
                <input type="checkbox" @click="cambio(c)"  v-model="c.estado" checked>
                <!--              @update:model-value="cambio(c)"-->
                <b>{{c.placa}}</b>
              </div>
            </div>
            <!--        </q-list>-->
          </div>
          <div class="col-2">
            <q-badge class="bg-warning full-width text-black text-bold">PLATA BAJA</q-badge>
            <div style="padding: 0px;margin: 0px;border: 0px;font-size: 1em"  v-for="c in carriles" :key="c.carril">
              <div v-if="c.carril>=54 && c.carril<=74" :class="c.estado?'bg-red-5':'bg-green-5'" style="height: 15px;font-size: 1em;border: 0.1px solid grey">
                <b>{{c.carril}}</b>
                <input type="checkbox" @click="cambio(c)"  v-model="c.estado" checked>
                <b>{{c.placa}}</b>
              </div>
            </div>
          </div>
          <div class="col-2">
            <q-badge class="bg-warning full-width text-black text-bold">PRIMER PISO</q-badge>
            <div style="padding: 0px;margin: 0px;border: 0px;font-size: 1em"  v-for="c in carriles" :key="c.carril">
              <div v-if="c.carril>=75 && c.carril<=101" :class="c.estado?'bg-red-5':'bg-green-5'" style="height: 15px;font-size: 1em;border: 0.1px solid grey">
                <b>{{c.carril}}</b>
                <input type="checkbox" @click="cambio(c)"  v-model="c.estado" checked>
                <b>{{c.placa}}</b>
              </div>
            </div>
          </div>
          <div class="col-2">
            <q-badge class="bg-warning full-width text-black text-bold">SEGUNDO PISO</q-badge>
            <div style="padding: 0px;margin: 0px;border: 0px;font-size: 1em"  v-for="c in carriles" :key="c.carril">
              <div v-if="c.carril>=102 && c.carril<=151" :class="c.estado?'bg-red-5':'bg-green-5'" style="height: 15px;font-size: 1em;border: 0.1px solid grey">
                <b>{{c.carril}}</b>
                <input type="checkbox" @click="cambio(c)"  v-model="c.estado" checked>
                <b>{{c.placa}}</b>
              </div>
            </div>
          </div>
          <div class="col-2">
            <q-badge class="bg-warning full-width text-black text-bold">TERCER PISO</q-badge>
            <div style="padding: 0px;margin: 0px;border: 0px;font-size: 1em"  v-for="c in carriles" :key="c.carril">
              <div v-if="c.carril>=152 && c.carril<=201" :class="c.estado?'bg-red-5':'bg-green-5'" style="height: 15px;font-size: 1em;border: 0.1px solid grey">
                <b>{{c.carril}}</b>
                <input type="checkbox" @click="cambio(c)"  v-model="c.estado" checked>
                <b>{{c.placa}}</b>
              </div>
            </div>
          </div>
          <div class="col-2">
            <q-badge class="bg-warning full-width text-black text-bold">CUARTO PISO</q-badge>
            <div style="padding: 0px;margin: 0px;border: 0px;font-size: 1em"  v-for="c in carriles" :key="c.carril">
              <div v-if="c.carril>=202 && c.carril<=251" :class="c.estado?'bg-red-5':'bg-green-5'" style="height: 15px;font-size: 1em;border: 0.1px solid grey">
                <b>{{c.carril}}</b>
                <input type="checkbox" @click="cambio(c)"  v-model="c.estado" checked>
                <b>{{c.placa}}</b>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-1">
        <div class="row">
          <div class="col-12">
            <q-badge class="bg-warning full-width text-black text-bold">MOTOCICLETAS</q-badge>
            <div style="padding: 0px;margin: 0px;border: 0px;font-size: 1em"  v-for="c in carriles" :key="c.carril">
              <div v-if="c.carril>=252 && c.carril<=269" :class="c.estado?'bg-red-5':'bg-green-5'" style="height: 15px;font-size: 1em;border: 0.1px solid grey">
                <b>{{c.carril}}</b>
                <input type="checkbox" @click="cambio(c)"  v-model="c.estado" checked>
                <b>{{c.placa}}</b>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <q-dialog v-model="modalinsertar" persistent>
      <q-card >
        <q-card-section class="bg-green text-bold ">
          <div class="text-h6">REGISTRO INGRESO DE VEHICULOS</div>
        </q-card-section>
        <q-form @submit="crear">
        <q-card-section class="q-pt-none">

          <q-input required @keyup="buscar" ref="placa" outlined label="placa" v-model="carril.placa" dense style="text-transform: uppercase" />
          <q-input required outlined label="conductor" v-model="carril.conductor" dense style="text-transform: uppercase"  />
          <div class="row">
            <div class="col-6">
              <q-input required outlined label="ci" v-model="carril.ci" dense style="text-transform: uppercase"/>
            </div>
            <div class="col-6">
              <q-input required outlined label="celular" v-model="carril.celular" dense style="text-transform: uppercase"/>
            </div>
          </div>
          <q-input outlined disable label="carril" v-model="carril.carril" dense />
          <q-input outlined disable label="nivel" v-model="carril.nivel" dense />
          <q-input outlined disable label="fechaingreso" v-model="carril.fechaingreso" dense />
          <q-input outlined disable label="horaingreso" v-model="carril.horaingreso" dense />
          <q-select :options="['HORAS','JORNADA(07:00 A 23:00)','MEDIA JORNADA(07:00 A 15:00)','MEDIA JORNADA(15:00 A 23:00)','NOCTURNO(23:00 A 07:00)','OFICIAL']" outlined label="tipo" v-model="carril.tipo" dense />
        </q-card-section>
        <q-card-actions align="right" class="bg-white text-teal">
          <q-btn label="CANCELAR" @click="this.carril.estado=false;this.carril.placa='';this.carril.conductor='';this.modalinsertar=false" color="negative" icon="delete"></q-btn>
          <q-btn label="CREAR" color="positive" icon="send" type="submit"/>
        </q-card-actions>
        </q-form>
      </q-card>
    </q-dialog>

    <q-dialog v-model="modalmodificar" persistent>
      <q-card >
        <q-card-section class="bg-warning text-bold text-black">
          <div class="text-h6">REGISTRO SALIDA DE VEHICULOS</div>
        </q-card-section>
        <q-form @submit="modificar">
          <q-card-section class="q-pt-none">
            <div class="row">
              <div class="col-6">
                <q-input required disable ref="placa" outlined label="placa" v-model="carril.placa" dense style="text-transform: uppercase" />
              </div>
              <div class="col-6">
                <q-input required outlined label="conductor" v-model="carril.conductor" dense style="text-transform: uppercase"/>
              </div>
              <div class="col-6">
                <q-input required outlined label="ci" v-model="carril.ci" dense style="text-transform: uppercase"/>
              </div>
              <div class="col-6">
                <q-input required outlined label="celular" v-model="carril.celular" dense style="text-transform: uppercase"/>
              </div>
              <div class="col-6">
                <q-input outlined disable label="carril" v-model="carril.carril" dense />
              </div>
              <div class="col-6">
                <q-input outlined disable label="nivel" v-model="carril.nivel" dense />
              </div>
              <div class="col-6">
                <q-input outlined @keyup="calculosalida" label="fechaingreso" v-model="carril.fechaingreso" dense />
              </div>
              <div class="col-6">
                <q-input outlined @keyup="calculosalida" label="horaingreso" v-model="carril.horaingreso" dense />
              </div>
              <div class="col-6">
                <q-input outlined disable label="fechasalida" v-model="carril.fechasalida" dense />
              </div>
              <div class="col-6">
                <q-input outlined disable label="horasalida" v-model="carril.horasalida" dense />
              </div>
              <div class="col-6">
                <q-select :options="['HORAS','JORNADA(07:00 A 23:00)','MEDIA JORNADA(07:00 A 15:00)','MEDIA JORNADA(15:00 A 23:00)','NOCTURNO(23:00 A 07:00)','OFICIAL']" outlined label="tipo" v-model="carril.tipo" dense />
              </div>
              <div class="col-6">
                <q-input outlined label="horas" v-model="carril.horas" dense />
              </div>
              <div class="col-12">
                <q-input class="bg-red text-bold text-white" outlined label="Monto" v-model="carril.bs" dense />
              </div>
            </div>
          </q-card-section>
          <q-card-actions align="right" class="bg-white text-teal">
            <q-btn label="Salida" @click="reimprimir()" color="info" icon="print" type="button"/>
            <q-btn label="CANCELAR" @click="this.modalmodificar=false;misdatos()" color="negative" icon="delete"></q-btn>
            <q-btn label="Salida" color="warning" icon="send" type="submit"/>
<!--            <pre>{{carril}}</pre>-->
          </q-card-actions>
        </q-form>
      </q-card>
    </q-dialog>
  </q-page>
</template>

<script>
import { date } from 'quasar'
import moment from 'moment'
export default {
  data(){
    return{
      modalinsertar:false,
      modalmodificar:false,
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
        // {carril:40,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:40,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:41,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:42,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:43,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:44,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:45,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:46,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:47,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:48,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:49,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:50,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:51,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:52,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:53,tipo:'HORAS',conductor:'',nivel:'SOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        // {carril:53,tipo:'HORAS',conductor:'',nivel:'P.B.',estado:false,placa:'',fechaingreso:'',horaingreso:''},
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
        {carril:102,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:103,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:104,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:105,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:106,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:107,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:108,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:109,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:110,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:111,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:112,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:113,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:114,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:115,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:116,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:117,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:118,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:119,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:120,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:121,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:122,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:123,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:124,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:125,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:126,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:127,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:128,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:129,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:130,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:131,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:132,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:133,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:134,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:135,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:136,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:137,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:138,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:139,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:140,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:141,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:142,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:143,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:144,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:145,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:146,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:147,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:148,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:149,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:150,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:151,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:152,tipo:'HORAS',conductor:'',nivel:'2°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:153,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:154,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:155,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:156,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:157,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:158,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:159,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:160,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:161,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:162,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:163,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:164,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:165,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:166,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:167,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:168,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:169,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:170,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:171,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:172,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:173,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:174,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:175,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:176,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:177,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:178,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:179,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:180,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:181,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:182,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:183,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:184,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:185,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:186,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:187,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:188,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:189,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:190,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:191,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:192,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:193,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:194,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:195,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:196,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:197,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:198,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:199,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:200,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:201,tipo:'HORAS',conductor:'',nivel:'3°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:202,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:203,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:204,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:205,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:206,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:207,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:208,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:209,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:210,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:211,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:212,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:213,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:214,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:215,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:216,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:217,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:218,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:219,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:220,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:221,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:222,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:223,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:224,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:225,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:226,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:227,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:228,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:229,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:230,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:231,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:232,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:233,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:234,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:235,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:236,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:237,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:238,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:239,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:240,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:241,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:242,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:243,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:244,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:245,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:246,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:247,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:248,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:249,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:250,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:251,tipo:'HORAS',conductor:'',nivel:'4°',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:252,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:253,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:254,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:255,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:256,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:257,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:258,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:259,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:260,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:261,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:262,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:263,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:264,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:265,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:266,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:267,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:268,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
        {carril:269,tipo:'HORAS',conductor:'',nivel:'MOT',estado:false,placa:'',fechaingreso:'',horaingreso:''},
      ],
      carril:{}
    }
  },
  created(){
    this.misdatos();

  },
  methods:{
    calculosalida(){
      // console.log(this.carril.fechaingreso)
      // return false
      var entryHour = moment(this.carril.fechaingreso+' '+this.carril.horaingreso, 'YYYY-MM-DD HH:mm:ss')
      var exitHour = moment(this.carril.fechasalida+' '+this.carril.horasalida, 'YYYY-MM-DD HH:mm:ss')
      var duration = parseInt(moment.duration(exitHour.diff(entryHour)).asHours())
      this.carril.horas=duration+1
      this.carril.bs=duration+1
      // console.log( parseInt(duration) );
    },
    misdatos(){
      this.$q.loading.show()
      this.$api.get('/parqueo').then(res=>{
        this.$q.loading.hide()
        // console.log(res.data)
        this.carriles.forEach(c=>{
          let found = res.data.find(r => r.carril ==  c.carril);
          if (found!=undefined){
            c.estado=true
            c.placa=found.placa
          }else{
              // c.tipo='HORAS'
              // c.conductor=''
              c.estado=false
              c.placa=''
          }
        })
      })
    },
    reimprimir(){
      this.$api.get('/boletasalida/'+this.carril.id+'/'+this.carril.bs+'/'+this.carril.horas).then(res=>{
        let myWindow = window.open("", "Imprimir", "width=1000,height=1000");
        myWindow.document.write(res.data);
        setTimeout(function(){
          myWindow.print();
          myWindow.close();
        },500);
        // this.misdatos()
      })
    },
    crear(){
      this.$q.loading.show()
      this.$api.post('/parqueo',this.carril).then(res=>{
        this.modalinsertar=false
        // console.log(res.data)
        let myWindow = window.open("", "Imprimir", "width=1000,height=1000");
        myWindow.document.write(res.data);
        myWindow.document.close();
        setTimeout(function(){
          myWindow.print();
          myWindow.close();
        },500);
        this.misdatos()
      })
    },
    modificar(){
      this.$q.loading.show()
      this.$api.put('/parqueo/'+this.carril.id,this.carril).then(res=>{
        // console.log(res.data)
        // return false
        this.modalmodificar=false
        this.carril={}
        this.misdatos()
      })
    },
    buscar(){
      this.carril.conductor=''
      if(this.carril.placa!='')
      this.$api.get('/parqueo/'+this.carril.placa).then(res=>{
        // console.log(res.data)
        if (res.data.length>0){
          this.carril.conductor=res.data[0].conductor
          this.carril.ci=res.data[0].ci
          this.carril.celular=res.data[0].celular
        }
      })
    },
    cambio(carril){
      this.carril=carril
      // console.log(carril)
      if (!carril.estado){
        this.carril.fechaingreso=date.formatDate(Date.now(),'YYYY-MM-DD')
        this.carril.horaingreso=date.formatDate(Date.now(),'HH:mm:ss')
        this.$nextTick(() => {
          setTimeout(() => {
            this.$refs.placa.$el.focus()
          }, 20)
        })
        this.modalinsertar=true
      }else{
        this.$q.loading.show()
        this.$api.get('/parqueo/'+this.carril.carril+'/edit').then(res=>{
          // if (res.data.length>0){
          //   this.carril.conductor=res.data[0].conductor
          // }
          console.log(res.data)
          this.$q.loading.hide()
          this.carril=res.data
          this.modalmodificar=true
        })
      }
    }
  }
}
</script>
