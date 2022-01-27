<template>
<q-page class="q-pa-xs">
  <div class="row">
    <div class="col-4"><q-input dense class="q-pa-xs" outlined v-model="fecha1" type="date" label="Fecha Ini" /></div>
    <div class="col-4"><q-input dense class="q-pa-xs" outlined v-model="fecha2" type="date" label="Fecha Fin" /></div>
    <div class="col-4"><q-select dense class="q-pa-xs" outlined v-model="user" :options="usuarios" label="Usuarios" /></div>

    <div class="col-4 flex flex-center">
      <q-btn label="Generar" @click="generar()" icon="print" color="primary"/>
    </div>
  </div>


</q-page>
</template>

<script>
import { date } from 'quasar';
import {jsPDF} from "jspdf";
import $ from "jquery";
import numero from "numeros_a_letras"
export default {
  name:"Reporte",
  data(){
    return{
      fecha1:date.formatDate(Date.now(),'YYYY-MM-DD'),
      fecha2:date.formatDate(Date.now(),'YYYY-MM-DD'),
      info:[],
      usuarios:[],
      user:{}
      }
  },
  created() {
    // console.log(numero(45))
    this.misusuarios()
  },
  methods:{
    misusuarios(){
      this.usuarios=[{label:'TODOS',username  :'TODOS0'}];
      this.$api.get('listuser').then(res=>{
        res.data.forEach(element => {
          this.usuarios.push({label:element.name,username:element.username});
        });
        this.user=this.usuarios[0]
      })
    },
    generar(){
      let mc=this
      console.log(mc.user.username)
      this.$api.post('reporte',{ini:mc.fecha1,fin:mc.fecha2,username:mc.user.username}).then(res=>{
        console.log(res.data)
        this.info=res.data
        //console.log(mc.info)
      // console.log('a')
      // return false
      let pag=0
      function header(){
        pag++;
        var img = new Image()
        var img2 = new Image()
        img.src = 'img/logoescudo.png'
        img2.src = 'img/logoparqueo.png'
        doc.addImage(img, 'jpg', 0.5, 0.3, 2, 2)
        doc.addImage(img2, 'jpg', 18, 0.3, 3, 2)
        doc.setFont(undefined,'bold')
        doc.setFontSize(9);
        doc.text(2.5, 0.5, 'GOBIERNO AUTONOMO MUNICIPAL DE ORURO ')
        doc.text(2.5, 1, '  DIRECCION DE TRAFICO Y VIALIDAD ' )
        doc.text(2.5, 1.5, '    PARQUEO MUNICIPAL DE ORURO' )
        doc.text(19.5, 0.5, 'Pag:'+pag )
         doc.setFontSize(10);
        doc.setFont(undefined,'bold')
        doc.text(1, 3, '    REPORTE DE TASAS POR SERVICIO DE ESTACIONAMIENTO DE FECHA '+mc.fecha1 +' - ' + mc.fecha2 )
        doc.setFontSize(9);
        doc.setFont(undefined,'normal')
        doc.text(0.5, 3, '________________________________________________________________________________________________________' )
        doc.setFont(undefined,'bold')
        doc.text(0.3, 3.7, 'Nro.' )
        doc.text(1.5,  3.7, 'FECHA' )
        doc.text(3, 3.7, 'PLACA' )
        doc.text(4.7, 3.7, 'CONDUCTOR' )
        doc.text(8, 3.7, 'NIVEL' )
        doc.text(9, 3.7, 'CARRIL' )
        doc.text(11, 3.7, 'ING. HRS.' )
        doc.text(13, 3.7, 'SAL. HRS.' )
        doc.text(16.2, 3.7, 'TIPO' )
        doc.text(17.2, 3.7, 'HRS' )
        doc.text(18.2, 3.7, 'MONTO' )
        doc.text(19.5, 3.7, 'OPERADOR' )
        doc.setFont(undefined,'normal')

        doc.text(0.5, 3.7, '__________________________________________________________________________________________________________________' )
      }
      var doc = new jsPDF('p','cm','letter')
      // console.log(dat);
       // doc.addFont('ArialMS', 'Arial', 'normal');
        doc.setFont('Arial');
       var x=0,y=4

      header()
        doc.setFontSize(10);
      let i=0
      let suma=0
      this.info.forEach(elem => {
        // doc.setFontSize(8);
        // console.log(elem)
        i++;
        doc.text(0.3, y, i+'' )
        doc.text(1,  y, elem.fechasalida)
        doc.text(3, y, elem.placa)
        doc.text(4.7, y, elem.conductor)
        doc.text(8, y, elem.nivel)
        doc.text(9, y, elem.carril+'')
        doc.text(9.5, y, elem.fechaingreso +' ' +elem.horaingreso )
        doc.text(13, y, elem.fechasalida +' ' +elem.horasalida )
        doc.text(16.2, y, elem.tipo.substr(0,1))
        doc.text(17.2, y, elem.horas+'')
        doc.text(18.2, y, elem.bs+'')
        doc.text(19.5, y, elem.operador)
        y=y+0.4;
        suma=suma+parseInt(elem.bs)
       if (y+3>30){
          doc.addPage();
          header()
          y=4
        }
        // i++
      });

      doc.text(0.5, y-0.3, '__________________________________________________________________________________________________________________' )
        doc.setFontSize(10);
        doc.setFont(undefined,'bold')
      doc.text(0.5,y+0.1,'Son: '+numero(suma)+' 0/100 Bs      TOTAL RECAUDACIÓN '+suma+' Bs.');

      window.open(doc.output('bloburl'), '_blank');
      })

    }

  }

}
</script>

