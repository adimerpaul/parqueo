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
      function header(){
        var img = new Image()
        var img2 = new Image()
        img.src = 'img/logoescudo.png'
        img2.src = 'img/logoparqueo.png'
        doc.addImage(img, 'jpg', 0.5, 0.5, 2, 2)
        doc.addImage(img2, 'jpg', 18.5, 0.5, 2, 2)
        doc.setFont(undefined,'bold')
        doc.text(2.5, 0.5, 'GOBIERNO AUTONOMO MUNICIPAL DE ORURO ')
        doc.text(2.5, 1, '  DIRECCION DE TRAFICO Y VIALIDAD ' )
        doc.text(2.5, 1, '    PARQUEO MUNICIPAL DE ORURO' )
      }
      var doc = new jsPDF('p','cm','letter')
      // console.log(dat);
      doc.setFont("courier");
      doc.setFontSize(9);
      // var x=0,y=
      header()

      window.open(doc.output('bloburl'), '_blank');
    }

  }

}
</script>

