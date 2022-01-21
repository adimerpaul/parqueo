<template>
<q-page class="q-pa-xs">
  <div class="row">
    <div class="col-4"><q-input dense class="q-pa-xs" outlined v-model="fecha1" type="date" label="Fecha Ini" /></div>
    <div class="col-4"><q-input dense class="q-pa-xs" outlined v-model="fecha2" type="date" label="Fecha Fin" /></div>
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
export default {
  name:"Reporte",
  data(){
    return{
      fecha1:date.formatDate(Date.now(),'YYYY-MM-DD'),
      fecha2:date.formatDate(Date.now(),'YYYY-MM-DD'),
      }
  },
  created() {
  },
  methods:{
    generar(){
      // console.log('a')
      // return false
      let mc=this
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
        doc.text(2.5, 0.5, 'GOBIERNO AUTONOMO MUNICIPAL DE ORURO ')
        doc.text(2.5, 1, '  DIRECCION DE TRAFICO Y VIALIDAD ' )
        doc.text(2.5, 1.5, '    PARQUEO MUNICIPAL DE ORURO' )
        doc.text(19.5, 0.5, 'Pag:'+pag )
         doc.setFontSize(10);
        doc.setFont(undefined,'bold')
        doc.text(1, 3, '    REPORTE DE TASAS POR SERVICIO DE ESTACIONAMIENTO DE FECHA '+mc.fecha1 +' - ' + mc.fecha2 )
        doc.setFontSize(9);
        doc.setFont(undefined,'normal')
        doc.setFont(undefined,'bold')
        doc.text(0.5, 3, '________________________________________________________________________________________________________' )
        doc.text(0.5, 3.7, 'Nro.' )
        doc.text(1.5,  3.7, 'FECHA' )
        doc.text(2.7, 3.7, 'PLACA' )
        doc.text(4, 3.7, 'CONDUCTOR' )
        doc.text(7, 3.7, 'NIVEL' )
        doc.text(8, 3.7, 'CARRIL' )
        doc.text(11, 3.7, 'ING. HRS.' )
        doc.text(13, 3.7, 'SAL. HRS.' )
        doc.text(15, 3.7, 'TIPO' )
        doc.text(16, 3.7, 'HRS' )
        doc.text(17, 3.7, 'MONTO' )
        doc.text(18.5, 3.7, 'OPERADOR' )

        doc.text(0.5, 3.7, '________________________________________________________________________________________________________' )
        doc.setFont(undefined,'normal')
      }
      var doc = new jsPDF('p','cm','letter')
      // console.log(dat);
      doc.setFont("courier");
      // var x=0,y=
        doc.setFontSize(9);
      header()

      window.open(doc.output('bloburl'), '_blank');
    }

  }

}
</script>

