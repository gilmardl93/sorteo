<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comision;
use App\Models\Informacion;
use App\Models\Firma;
use PDF;

class ReporteController extends Controller
{
    public function reporte()
    {
        return view('reporte.comision');
    }

    public function actaPDF()
    {
        PDF::SetAutoPageBreak(false);
        PDF::AddPage("A4","R");
        HeaderPDF();
        $this->texto();
        $this->postulante();
        $this->firma();
        $this->pagina2();
        $this->pagina3();
        FooterPDF();
        PDF::Output('ACTA_DEL_SORTEO_DE_LA_COMISION_DE_POSTULANTES.pdf');
    }

    public function texto()
    {
        $informacion = Informacion::all();
        PDF::SetFont('Helvetica','',12);
        PDF::SetY(30);
        foreach($informacion as $row):
        PDF::writeHTML($row->informacion, true, false, true, false, '');
        endforeach;
    }

    public function postulante()
    {        
        PDF::setXY(10,120);
        $comision = Comision::Validos()->get();
        foreach($comision as $row):
        PDF::SetFont('Helvetica','',12);
        PDF::Cell(30,10,$row->examen);
        PDF::Ln();
        PDF::SetFont('Helvetica','',8);
        PDF::Cell(185,5,$row->nro_inscripcion_1.' - '.$row->datos_1.' - '.$row->cargo_1,1);
        PDF::Ln();
        PDF::Cell(185,5,$row->nro_inscripcion_2.' - '.$row->datos_2.' - '.$row->cargo_2,1);
        PDF::Ln();
        PDF::Cell(185,5,$row->nro_inscripcion_3.' - '.$row->datos_3.' - '.$row->cargo_3,1);
        PDF::Ln();
        endforeach;
    }

    public function firma()
    {
        PDF::SetFont('Helvetica','',8);
        $firma1 = Firma::where('id',1)->get();
        $firma2 = Firma::where('id',2)->get();
        $firma3 = Firma::where('id',3)->get();
        $firma4 = Firma::where('id',4)->get();
        foreach($firma1 as $row1):
        if($row1->facultad != "VACIO" && $row1->decano != "VACIO"){
        #FIRMA 1
        PDF::SetXY(10,210);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(10,214);
        PDF::Cell(60,10,$row1->decano,0,'','C');
        PDF::SetXY(10,220);
        PDF::MultiCell(70,2,$row1->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma2 as $row2):
        if($row2->facultad != "VACIO" && $row2->decano != "VACIO"){
        #FIRMA 2
        PDF::SetXY(120,210);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(120,214);
        PDF::Cell(60,10,$row2->decano,0,'','C');
        PDF::SetXY(120,220);
        PDF::MultiCell(60,10,$row2->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma3 as $row3):
        if($row3->facultad != "VACIO" && $row3->decano != "VACIO"){
        #FIRMA 3
        PDF::SetXY(10,250);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(10,254);
        PDF::Cell(60,10,$row3->decano,0,'','C');
        PDF::SetXY(10,260);
        PDF::MultiCell(60,10,$row3->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma4 as $row4):
        if($row4->facultad != "VACIO" && $row4->decano != "VACIO"){
        #FIRMA 4
        PDF::SetXY(120,250);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(120,254);
        PDF::Cell(60,10,$row4->decano,0,'','C');
        PDF::SetXY(120,260);
        PDF::MultiCell(60,10,$row4->facultad,0,'C');
        }else{} 
        endforeach;
    }

    public function pagina2()
    {
        $firma5 = Firma::where('id',5)->get();
        $firma6 = Firma::where('id',6)->get();
        $firma7 = Firma::where('id',7)->get();
        $firma8 = Firma::where('id',8)->get();
        $firma9 = Firma::where('id',9)->get();
        $firma10 = Firma::where('id',10)->get();
        $firma11 = Firma::where('id',11)->get();
        $firma12 = Firma::where('id',12)->get();
        $firma13 = Firma::where('id',13)->get();
        $firma14 = Firma::where('id',14)->get();
        $firma15 = Firma::where('id',15)->get();
        $firma16 = Firma::where('id',16)->get();
        PDF::SetAutoPageBreak(false);
        PDF::AddPage("A4","R");
        HeaderPDF();
        PDF::SetFont('Helvetica','',8);
        foreach($firma5 as $row5):
        if($row5->facultad != "VACIO" && $row5->decano != "VACIO"){
        #FIRMA 5
        PDF::SetXY(10,50);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(10,54);
        PDF::Cell(60,10,$row5->decano,0,'','C');
        PDF::SetXY(10,60);
        PDF::MultiCell(60,10,$row5->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma6 as $row6):
        if($row6->facultad != "VACIO" && $row6->decano != "VACIO"){
        #FIRMA 6
        PDF::SetXY(120,50);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(120,54);
        PDF::Cell(60,10,$row6->decano,0,'','C');
        PDF::SetXY(120,60);
        PDF::MultiCell(60,10,$row6->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma7 as $row7):
        if($row7->facultad != "VACIO" && $row7->decano != "VACIO"){
        #FIRMA 7
        PDF::SetXY(10,90);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(10,94);
        PDF::Cell(60,10,$row7->decano,0,'','C');
        PDF::SetXY(10,100);
        PDF::MultiCell(60,10,$row7->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma8 as $row8):
        if($row8->facultad != "VACIO" && $row8->decano != "VACIO"){
        #FIRMA 8
        PDF::SetXY(120,90);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(120,94);
        PDF::Cell(60,10,$row8->decano,0,'','C');
        PDF::SetXY(120,100);
        PDF::MultiCell(60,10,$row8->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma9 as $row9):
        if($row9->facultad != "VACIO" && $row9->decano != "VACIO"){
        #FIRMA 9
        PDF::SetXY(10,130);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(10,134);
        PDF::Cell(60,10,$row9->decano,0,'','C');
        PDF::SetXY(10,140);
        PDF::MultiCell(60,10,$row9->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma10 as $row10):
        if($row10->facultad != "VACIO" && $row10->decano != "VACIO"){
        #FIRMA 10
        PDF::SetXY(120,130);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(120,134);
        PDF::Cell(60,10,$row10->decano,0,'','C');
        PDF::SetXY(120,140);
        PDF::MultiCell(60,10,$row10->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma11 as $row11):
        if($row11->facultad != "VACIO" && $row11->decano != "VACIO"){
        #FIRMA 11
        PDF::SetXY(10,170);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(10,174);
        PDF::Cell(60,10,$row11->decano,0,'','C');
        PDF::SetXY(10,180);
        PDF::MultiCell(60,10,$row11->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma12 as $row12):
        if($row12->facultad != "VACIO" && $row12->decano != "VACIO"){
        #FIRMA 12
        PDF::SetXY(120,170);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(120,174);
        PDF::Cell(60,10,$row12->decano,0,'','C');
        PDF::SetXY(120,180);
        PDF::MultiCell(60,10,$row12->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma13 as $row13):
        if($row13->facultad != "VACIO" && $row13->decano != "VACIO"){
        #FIRMA 13
        PDF::SetXY(10,210);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(10,214);
        PDF::Cell(60,10,$row13->decano,0,'','C');
        PDF::SetXY(10,220);
        PDF::MultiCell(60,10,$row13->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma14 as $row14):
        if($row14->facultad != "VACIO" && $row14->decano != "VACIO"){
        #FIRMA 14
        PDF::SetXY(120,210);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(120,214);
        PDF::Cell(60,10,$row14->decano,0,'','C');
        PDF::SetXY(120,220);
        PDF::MultiCell(60,10,$row14->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma15 as $row15):
        if($row15->facultad != "VACIO" && $row15->decano != "VACIO"){
        #FIRMA 15
        PDF::SetXY(10,250);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(10,254);
        PDF::Cell(60,10,$row15->decano,0,'','C');
        PDF::SetXY(10,260);
        PDF::MultiCell(60,10,$row15->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma16 as $row16):
        if($row16->facultad != "VACIO" && $row16->decano != "VACIO"){
        #FIRMA 16
        PDF::SetXY(120,250);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(120,254);
        PDF::Cell(60,10,$row16->decano,0,'','C');
        PDF::SetXY(120,260);
        PDF::MultiCell(60,10,$row16->facultad,0,'C');
        }else{} 
        endforeach;
        FooterPDF();
        
    }

    public function pagina3()
    {        
        $firma17 = Firma::where('id',17)->get();
        $firma18 = Firma::where('id',18)->get();
        $firma19 = Firma::where('id',19)->get();
        $firma20 = Firma::where('id',20)->get();
        PDF::SetAutoPageBreak(false);
        PDF::AddPage("A4","R");
        HeaderPDF();
        PDF::SetFont('Helvetica','',8);
        foreach($firma17 as $row17):
        if($row17->facultad != "VACIO" && $row17->decano != "VACIO"){
        #FIRMA 17
        PDF::SetXY(10,50);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(10,54);
        PDF::Cell(60,10,$row17->decano,0,'','C');
        PDF::SetXY(10,60);
        PDF::MultiCell(60,10,$row17->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma18 as $row18):
        if($row18->facultad != "VACIO" && $row18->decano != "VACIO"){
        #FIRMA 18
        PDF::SetXY(120,50);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(120,54);
        PDF::Cell(60,10,$row18->decano,0,'','C');
        PDF::SetXY(120,60);
        PDF::MultiCell(60,10,$row18->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma19 as $row19):
        if($row19->facultad != "VACIO" && $row19->decano != "VACIO"){
        #FIRMA 19
        PDF::SetXY(10,90);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(10,94);
        PDF::Cell(60,10,$row19->decano,0,'','C');
        PDF::SetXY(10,100);
        PDF::MultiCell(60,10,$row19->facultad,0,'C');
        }else{} 
        endforeach;
        foreach($firma20 as $row20):
        if($row20->facultad != "VACIO" && $row20->decano != "VACIO"){
        #FIRMA 20
        PDF::SetXY(120,90);
        PDF::Cell(50,10,'_______________________________________________');
        PDF::SetXY(120,94);
        PDF::Cell(60,10,$row20->decano,0,'','C');
        PDF::SetXY(120,100);
        PDF::MultiCell(60,10,$row20->facultad,0,'C');
        }else{} 
        endforeach;
        FooterPDF();
    }
}
