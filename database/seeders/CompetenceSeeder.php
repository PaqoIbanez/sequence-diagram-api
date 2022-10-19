<?php

namespace Database\Seeders;

use App\Models\Competence;
use Illuminate\Database\Seeder;

class CompetenceSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $competence = new Competence();
      $competence->id = "VA1002";
      $competence->name = "Introductory Courses";
      $competence->semester = 0;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "EG1001";
      $competence->name = "Elective Course Mathematics and Science";
      $competence->semester = 1;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "F1001B";
      $competence->name = "Engineering and Science Modeling";
      $competence->semester = 1;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "F1004B";
      $competence->name = "Modeling the Movement in Engineering";
      $competence->semester = 1;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "F1005B";
      $competence->name = "Modeling in Engineering with Conservation Laws";
      $competence->semester = 1;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "MA1028";
      $competence->name = "Mathematical Thinkink I";
      $competence->semester = 1;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "Q1028";
      $competence->name = "Foundation of the Strucutre and Transformation of Matter";
      $competence->semester = 1;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC1028";
      $competence->name = "Computational Thinking for Engineering";
      $competence->semester = 1;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC1033";
      $competence->name = "Object Oriented Computational Thinking";
      $competence->semester = 1;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "EG1002";
      $competence->name = "Elective Courses Jumanities and Fine Arts";
      $competence->semester = 2;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "F1013B";
      $competence->name = "Modeling of Electrical Systems in Engineering";
      $competence->semester = 2;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "F1014B";
      $competence->name = "Modeling od Electromagnetic Systems in Engineering";
      $competence->semester = 2;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "F1008";
      $competence->name = "Physical Experimentation and Statistical Thinking";
      $competence->semester = 2;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC1003B";
      $competence->name = "Modeling Engineering with Computational Mathematics";
      $competence->semester = 2;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "MA1029";
      $competence->name = "Intermediate Mathematical Modeling";
      $competence->semester = 2;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "BT1013";
      $competence->name = "Computational Biology Analysis";
      $competence->semester = 2;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "MA1031";
      $competence->name = "tatistics Analysis";
      $competence->semester = 2;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC1030";
      $competence->name = "Object Oriented Programming";
      $competence->semester = 2;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "EG1003";
      $competence->name = "Elective Course Social and Behavioral Sciences";
      $competence->semester = 3;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "MA1033";
      $competence->name = "Differential Equations Analysis";
      $competence->semester = 3;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TI1015";
      $competence->name = "Analysis of Software requirements";
      $competence->semester = 3;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC1032";
      $competence->name = "Computer Architecture and Digital Systems Modeling";
      $competence->semester = 3;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC1031";
      $competence->name = "Data Sctructures and Fundamental Algorithms Programming";
      $competence->semester = 3;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "VA1001B";
      $competence->name = "Exploration Topic";
      $competence->semester = 3;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "EG1004";
      $competence->name = "Elective Course Leadership Entrepreneurship and Innovation";
      $competence->semester = 4;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC2037";
      $competence->name = "Computational Methods Implementation";
      $competence->semester = 4;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC2005B";
      $competence->name = "ISoftware Construction and Decision Making";
      $competence->semester = 4;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC2006B";
      $competence->name = "IDevices Interconection";
      $competence->semester = 4;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "EG1005";
      $competence->name = "Elective Course Ethics and Citizenship";
      $competence->semester = 5;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC30058";
      $competence->name = "Advanced Analysis and Design of Algorithms";
      $competence->semester = 5;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC2007B";
      $competence->name = "Integrating Information Security in Networks and Software Systems";
      $competence->semester = 5;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC2008B";
      $competence->name = "Modeling multiagent systems with Computes Graphics";
      $competence->semester = 5;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC3004B";
      $competence->name = "Software Systems Planning";
      $competence->semester = 6;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC3005B";
      $competence->name = "Software Systems Development and Deployment";
      $competence->semester = 6;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "OP3091";
      $competence->name = "Professional Elective I";
      $competence->semester = 7;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "OP3092";
      $competence->name = "Professional Elective II";
      $competence->semester = 7;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "OP3093";
      $competence->name = "Professional Elective III";
      $competence->semester = 7;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "OP3094";
      $competence->name = "Professional Elective IV";
      $competence->semester = 7;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "OP3095";
      $competence->name = "Professional Elective V";
      $competence->semester = 7;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "OP3096";
      $competence->name = "Professional Elective VI";
      $competence->semester = 7;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "OP3001B";
      $competence->name = "Elective Multidisciplinary Professional";
      $competence->semester = 8;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC3002B";
      $competence->name = "Advanced CS Application Development";
      $competence->semester = 8;
      $competence->uf_id = 1;
      $competence->save();

      $competence = new Competence();
      $competence->id = "TC3003B";
      $competence->name = "Distributed Services and Wide area Networks implementation";
      $competence->semester = 8;
      $competence->uf_id = 1;
      $competence->save();
   }
}
