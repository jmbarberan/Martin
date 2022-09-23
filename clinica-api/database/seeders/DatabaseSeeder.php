<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('usuarios')->insert([
            'nombre' => 'admin',
            'clave' => md5('admin')
        ]);

        #region Seed pacientes
        DB::table('pacientes')->insert([
            'id' => 5277, 'cedula' => '0910022383', 'nombre' => 'CEREZO GUERRERO DOLORES NATIVIDAD', 'direccion' => 'COOP GALLEGOS LARA MZ P66 S.4', 'telefono' => '593-04-263807', 'fecha_nacimiento' => '1966-12-25'
        ]);
        DB::table('pacientes')->insert([
            'id' => 5651, 'cedula' => '0913446282', 'nombre' => 'NAVARRETE TORRES MARIA MAGDALENA', 'direccion' => 'KM 10 VIA A DAULE', 'telefono' => '593-04-110807', 'fecha_nacimiento' => '1969-07-22'
        ]);
        DB::table('pacientes')->insert([    
            'id' => 6552, 'cedula' => '0911246494', 'nombre' => 'CONFORME ANCHUNDIA FLOR GUADALUPE', 'direccion' => 'COOP 14 DE AGOSTO MZ E SL.21', 'telefono' => '09982503911', 'fecha_nacimiento' => '1963-11-07'
        ]);
        DB::table('pacientes')->insert([    
            'id' => 7005, 'cedula' => '1710393727', 'nombre' => 'CEVALLOS TAGLE MARIANA DE JESUS', 'direccion' => 'VOLUNTAD DE DIOS', 'telefono' => '593-9-069643905', 'fecha_nacimiento' => '1955-10-19'
        ]);
        DB::table('pacientes')->insert([    
            'id' => 11700, 'cedula' => '0904887056', 'nombre' => 'YAGUANA CHAMBA GERMAN', 'direccion' => 'BASTION POPULAR BL 6 MZ 921 SL 2', 'telefono' => '593-04-899575', 'fecha_nacimiento' => '1953-03-14'
        ]);
        DB::table('pacientes')->insert([    
            'id' => 21425, 'cedula' => '0902565514', 'nombre' => 'HOLGUIN BOHORQUEZ ROSA MARIA', 'direccion' => 'KM 7.5 VIA A DAULE COOP GALLEGOS LARA', 'telefono' => '593-04-262633', 'fecha_nacimiento' => '1953-11-08'
        ]);
        DB::table('pacientes')->insert([    
            'id' => 23976, 'cedula' => '1304937905', 'nombre' => 'ALAY SALVATIERRA FRANCISCA CONCEPCION', 'direccion' => 'COOP FRANCISCO JACOME MZ 294 SL 20', 'telefono' => '593-9-0988875135', 'fecha_nacimiento' => '1963-10-10'
        ]);
        DB::table('pacientes')->insert([    
            'id' => 24299, 'cedula' => '0912437704', 'nombre' => 'MENDOZA ACOSTA JOSEFA ESMERALDAS', 'direccion' => 'COOP. EL FORTIN BLOQUE 7 MZ. 1325 SOL. 3', 'telefono' => '0993914647', 'fecha_nacimiento' => '1965-03-19'
        ]);
        DB::table('pacientes')->insert([    
            'id' => 24517, 'cedula' => '0926061672', 'nombre' => 'SORIANO MIRANDA GLORIA ESTHER', 'direccion' => 'FLORIDA NORTE MZ D16 SL 4', 'telefono' => '593-9-0989387946', 'fecha_nacimiento' => '1989-02-11'
        ]);
        DB::table('pacientes')->insert([    
            'id' => 27062, 'cedula' => '1201193057', 'nombre' => 'ZAMBRANO GUEVARA JOVITA DEL CARMEN', 'direccion' => 'MUCHO LOTE 3ERA ETAPA MZ 2485 SL 7', 'telefono' => '593-04-2897220', 'fecha_nacimiento' => '1959-09-12'
        ]);
        DB::table('pacientes')->insert([    
            'id' => 28653, 'cedula' => '0909542789', 'nombre' => 'LUZURIAGA BRIONES HIPOLITA', 'direccion' => 'FLOR DE BASTION BLOQ 8', 'telefono' => '593-04-2858569', 'fecha_nacimiento' => '1939-12-07'
        ]);
        DB::table('pacientes')->insert([    
            'id' => 32072, 'cedula' => '0903941771', 'nombre' => 'BRITO ONOFRE IDALIDA PIEDAD', 'direccion' => 'CDLA SIMON BOLIVAR', 'telefono' => '593-04-2924992', 'fecha_nacimiento' => '1946-01-04'
        ]);
        #endregion
    
        #region  Seed medicos
        DB::table('medicos')->insert([
            'id' => 1,'nombre' => 'Dr. Abel Barberan Perez', 'cedula' => '0928498972', 'registro_profesional' => 'RMSP-3524', 'direccion' => 'Coop. Unidad Nacional Mz 375 S.8', 'telefono' => '593-04-2250623  '
        ]);
        DB::table('medicos')->insert([
            'id' => 2,'nombre' => 'Dr. Hebert Marcillo Ocampo', 'cedula' => '0901566133', 'registro_profesional' => 'RMSP-3525', 'direccion' => 'URB. PLAZA MADEIRA MZ 25 V. 4', 'telefono' => '593-9-2189142'
        ]);
        DB::table('medicos')->insert([    
            'id' => 3,'nombre' => 'Dra. Rubí Gutierrez Martinez', 'cedula' => '0915135511', 'registro_profesional' => 'RMSP-3526', 'direccion' => 'Saucs 4  MZ 372 v46 ', 'telefono' => '04-2620254  '
        ]);
        DB::table('medicos')->insert([    
            'id' => 9,'nombre' => 'Dr. Marcelo Gonzalez Balladares', 'cedula' => '0907896096', 'registro_profesional' => 'RMSP-3527', 'direccion' => 'CDLA NAVAL NORTE ', 'telefono' => '593-9-085149294'
        ]);
        DB::table('medicos')->insert([    
            'id' => 10,'nombre' => 'Dr. Mauro Lindao Mora', 'cedula' => '0902957695', 'registro_profesional' => 'RMSP-3528', 'direccion' => 'SAUCES 6 MZ 3222  VILLA 20', 'telefono' => '593-04-304880'
        ]);
        DB::table('medicos')->insert([    
            'id' => 24,'nombre' => 'Dra. Gioconda Mieles Haro', 'cedula' => '0907728455', 'registro_profesional' => 'RMSP-3529', 'direccion' => 'CDLA GUAYACANES MZ.76 V.11', 'telefono' => '593-093672361'
        ]);    
        #endregion
    
        #region Seed especialidades
        DB::table('especialidades')->insert([
            'id' => 1086, 'denominacion' =>	'MEDICINA GENERAL'
        ]);
        DB::table('especialidades')->insert([
            'id' => 1416, 'denominacion' =>	'OFTALMOLOGICA'
        ]);
        DB::table('especialidades')->insert([
            'id' => 1428, 'denominacion' =>	'CARDIOLOGIA'
        ]);
        DB::table('especialidades')->insert([
            'id' => 1434, 'denominacion' =>	'GINECOLOGIA'
        ]);
        DB::table('especialidades')->insert([
            'id' => 1453, 'denominacion' =>	'TRAUMATOLOGIA'
        ]);
        DB::table('especialidades')->insert([
            'id' => 1458, 'denominacion' =>	'GASTROENTEROLOGIA'
        ]);
        #endregion
    
        #region Seed citas
        DB::table('citas')->insert([
            'id' => 8856,'paciente_id' => 24299, 'medico_id' => 2, 'fecha' => '2016-01-06', 'sintomas' => 'PLASTIA LIBRE DE CONJUNTIVA OI', 'diagnostico' => 'PTERIGION', 'tratamiento' => 'LANCIPROX DX Y TEARSOFT', 'especialidad_id' => 1416, 'signos_vitales' => '   '
        ]);
        DB::table('citas')->insert([
            'id' => 8923,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2016-01-09', 'sintomas' => '', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'MONTELUKAST  CONDROSOL TRIO   OSTEOBLASTOL FORTE   BIO T', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 63  Presion: 120/70 '
        ]);
        DB::table('citas')->insert([    
            'id' => 9045,'paciente_id' => 24299, 'medico_id' => 2, 'fecha' => '2016-01-15', 'sintomas' => 'se saco puntos conjuntivales oi', 'diagnostico' => 'PTERIGION', 'tratamiento' => 'igual medicacion', 'especialidad_id' => 1416, 'signos_vitales' => '   '
        ]);
        DB::table('citas')->insert([    
            'id' => 9269,'paciente_id' => 24299, 'medico_id' => 2, 'fecha' => '2016-01-25', 'sintomas' => 'av odi 20/20cc od +0.75esf oi +1.00esf add odi +3.00esf bm od normal oi plastia libre de conjuntiva', 'diagnostico' => 'PTERIGION', 'tratamiento' => 'tearsoft y lentes', 'especialidad_id' => 1494, 'signos_vitales' => 'Peso: 60  Presion: 100/60 '
        ]);
        DB::table('citas')->insert([    
            'id' => 9287,'paciente_id' => 21425, 'medico_id' => 1, 'fecha' => '2016-01-26', 'sintomas' => 'paciente viene a control por ser hipertenso', 'diagnostico' => 'HIPERTENSION ARTERIAL', 'tratamiento' => 'simultan d 80mg am fenofikan 160mg', 'especialidad_id' => 1428, 'signos_vitales' => 'Peso: 100 Talla: 156 Presion: 120/80 '
        ]);
        DB::table('citas')->insert([    
            'id' => 9489,'paciente_id' => 6552, 'medico_id' => 9, 'fecha' => '2016-02-05', 'sintomas' => 'homalgia derecha capsulitis', 'diagnostico' => 'ARTRITIS', 'tratamiento' => 'inflacort retard `celebrex aciberkan', 'especialidad_id' => 1453, 'signos_vitales' => '   '
        ]);
        DB::table('citas')->insert([    
            'id' => 9510,'paciente_id' => 6552, 'medico_id' => 9, 'fecha' => '2016-02-05', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1454, 'signos_vitales' => '   '
        ]);
        DB::table('citas')->insert([    
            'id' => 9767,'paciente_id' => 6552, 'medico_id' => 9, 'fecha' => '2016-02-19', 'sintomas' => 'control imagenes  de hombro iderecho', 'diagnostico' => 'REUMATISMO', 'tratamiento' => 'analgesicos', 'especialidad_id' => 1453, 'signos_vitales' => 'Peso: 65  Presion: 120/80 '
        ]);
        DB::table('citas')->insert([
            'id' => 10115,'paciente_id' => 6552, 'medico_id' => 9, 'fecha' => '2016-03-03', 'sintomas' => 'lesion del  supraespinozo hombro  derecho', 'diagnostico' => 'BURSITIS', 'tratamiento' => 'ic especialista en  hombro', 'especialidad_id' => 1453, 'signos_vitales' => '   '
        ]);
        DB::table('citas')->insert([
            'id' => 10102,'paciente_id' => 21425, 'medico_id' => 1, 'fecha' => '2016-03-03', 'sintomas' => 'a control x hta', 'diagnostico' => 'HIPERTENSION ARTERIAL', 'tratamiento' => 'simultan a fenofikan energit', 'especialidad_id' => 1428, 'signos_vitales' => 'Peso: 100 Talla: 156 Presion: 110/80 '
        ]);
        DB::table('citas')->insert([
            'id' => 10233,'paciente_id' => 23976, 'medico_id' => 10, 'fecha' => '2016-03-08', 'sintomas' => 'dolor toracico  post esfuerzo', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'tensiflex    mitrul', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 62  Presion: 110/70 '
        ]);
        DB::table('citas')->insert([    
            'id' => 10453,'paciente_id' => 23976, 'medico_id' => 9, 'fecha' => '2016-03-18', 'sintomas' => 'fx de  muñeca izq', 'diagnostico' => 'FRACTURA', 'tratamiento' => 'reduccion estabiliazcion de fractura +yeso', 'especialidad_id' => 1453, 'signos_vitales' => 'Peso: 62  Presion: 130/80 '
        ]);
        DB::table('citas')->insert([    
            'id' => 10580,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2016-03-22', 'sintomas' => 'FIEBRE  TOS   DOLOR EN ARTICULACIONES  CEFALEA', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'LORATADINA  LEMONFLU   VALERPAN   MONTELUKAST MK   CONDROSOL TRIO  NEBULASMA', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 64  Presion: 120/80 '
        ]);
        DB::table('citas')->insert([
            'id' => 10822,'paciente_id' => 21425, 'medico_id' => 1, 'fecha' => '2016-04-04', 'sintomas' => 'paciente viene a control por ser hipertensa', 'diagnostico' => 'VALORACION CARDIOLOGICA', 'tratamiento' => 'fondo de ojo simultan 160mg-fenofikan', 'especialidad_id' => 1428, 'signos_vitales' => 'Peso: 98 Talla: 156 Presion: 110/80 '
             ]);
        DB::table('citas')->insert([
            'id' => 10963,'paciente_id' => 21425, 'medico_id' => 2, 'fecha' => '2016-04-09', 'sintomas' => 'av odi 20/20cc od +3.00esf-1.50cilx20 oi +3.00esf-3.00cilx180  add odi +3.00esf bm ODI NORMAL PIO ODI 12MMHG', 'diagnostico' => 'DEFICIT VISUAL', 'tratamiento' => 'LENTES Y CONTROLES D EUS PRESION ARTERIAL CON SU CARDIOLOGO', 'especialidad_id' => 1494, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id' => 11015,'paciente_id' => 21425, 'medico_id' => 4, 'fecha' => '2016-04-11', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1114, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id' => 11934,'paciente_id' => 24517, 'medico_id' => 24, 'fecha' => '2016-05-17', 'sintomas' => 'paciente acude a consulta por control  prenatal refiere que hoy en la mañana  presentro sangradoutero en anteversion aumentado de tamaño con saco gestacional , cuyo no presencia de feto  sg 5.0  dias  embrio cardio desprendimiento +- 20% , embrio cardio  positivo no valorable embarazo de +- 5 sem de gestacion mas amenaza de aborto  control 15 dias .', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'geslutin 100mg +  calcinon natal forte + complan tarro + redoxon + etrom ovulo +', 'especialidad_id' => 1434, 'signos_vitales' => 'Peso: 78  Presion: 120/60 '
             ]);
        DB::table('citas')->insert([
            'id' => 12166,'paciente_id' => 24517, 'medico_id' => 24, 'fecha' => '2016-05-30', 'sintomas' => 'PACIENTE ACUDE A CONSULTA POR RESULTADOS DE ECOGRAFIA   UTERO EN ANTERIOR  , BORDES REGULRES , DE TEXTURA HOMOGENEA , ENDOMETRIO HIPERECOGENICA MIDE  +-0.72 CM , OVARIO DERECHO 3.25 CM X 1.66  CM  , OVARIO IZQUIERDO  3.10 X  2,04 CM  ID UTERO Y ANEXOS DENTRO DE PARAMETROS NORMALES', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'DIVANON  OVULOS +   RECAMICINA + AC FOLICO +  LUVIT B + REDOXON', 'especialidad_id' => 1434, 'signos_vitales' => 'Peso: 67  Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id' => 12208,'paciente_id' => 24299, 'medico_id' => 24, 'fecha' => '2016-06-01', 'sintomas' => 'paciente acude a consulta por toma de pap + secresion vaginal de color blanca grumosa   ,  cefalea, imnomnio  ,  calurones', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'vagibiotic plus  +  fluconazol  + climasoy', 'especialidad_id' => 1511, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id' => 12215,'paciente_id' => 6552, 'medico_id' => 1, 'fecha' => '2016-06-02', 'sintomas' => 'control x hta', 'diagnostico' => 'HIPERTENSION ARTERIAL', 'tratamiento' => 'simulta d 80mg am', 'especialidad_id' => 1428, 'signos_vitales' => 'Peso: 68 Talla: 144 Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id' => 12277,'paciente_id' => 24299, 'medico_id' => 24, 'fecha' => '2016-06-04', 'sintomas' => 'consulta', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => '', 'especialidad_id' => 1433, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id' => 12468,'paciente_id' => 24299, 'medico_id' => 24, 'fecha' => '2016-06-11', 'sintomas' => 'PACIENTE ACUDE A CONSULTA POR  RESULTADOS DE ORINA PH 7 , PIOCITOS 2-3 XC  CELULAS ABUNDANTES , F MUCOSOS + CULTIVO NEGATIVO ,   NEGATIVO  PARA CANCER , FROTIS INFLAMATORIO  ATROFIA CELULAR  PAP CLASE 2 ,', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'LIONDOX PLUS  +  FEMMEDICAL', 'especialidad_id' => 1433, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id' => 12474,'paciente_id' => 23976, 'medico_id' => 24, 'fecha' => '2016-06-13', 'sintomas' => 'paciente acude a consulta por   prurito vulvar  y secresion de +-  1 semana de evolucion  al examen presenta secresion  vaginal blanca y hemorroides inflamados', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'vagil c +  fluconazol  + faktu', 'especialidad_id' => 1434, 'signos_vitales' => 'Peso: 61 Talla: 138 Presion: 120/70 '
             ]);
        DB::table('citas')->insert([
            'id' => 12735,'paciente_id' => 21425, 'medico_id' => 9, 'fecha' => '2016-06-24', 'sintomas' => 'lumbalgia ciatalgia  derecha app hernia discal  anestesia raquidea 3 ocaciones', 'diagnostico' => 'LUMBOCIATALGIA', 'tratamiento' => 'analgesicos fisioterapia', 'especialidad_id' => 1453, 'signos_vitales' => 'Peso: 96 Talla: 157 Presion: 130/80 '
             ]);
        DB::table('citas')->insert([
            'id' => 12736,'paciente_id' => 21425, 'medico_id' => 3, 'fecha' => '2016-06-24', 'sintomas' => 'DOLOR EN EPIGASTRIO E H.I', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'DEBRIDAT  OMEPRAZOL  ACI TIP  KUFER Q  HEPACOLIN  FIBRACK  COLAX', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 97 Talla: 157 Presion: 140/80 '
             ]);
        DB::table('citas')->insert([
            'id' => 12760,'paciente_id' => 21425, 'medico_id' => 9, 'fecha' => '2016-06-24', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1454, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id' => 12914,'paciente_id' => 5277, 'medico_id' => 3, 'fecha' => '2016-07-02', 'sintomas' => 'PCTE ACUDE CON EPIGASTRALGIA  METEORISMO  NAUSEA  MALESTAR GENERAL  ESTREÑIMIENTO', 'diagnostico' => 'COLITIS', 'tratamiento' => 'DEBRIDAT  OMEPRAZOL  ACI TIP  COLAX  CONTUMAX', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 56  Presion: 100/80 '
             ]);
        DB::table('citas')->insert([
            'id' => 12929,'paciente_id' => 21425, 'medico_id' => 24, 'fecha' => '2016-07-04', 'sintomas' => 'PACIENTE ACUDE A  CONSULTA POR   PRESENTA UM BULTO EN LA PARTE INTERNA + TOMA DE PAP  AL EXAMEN PRESENTA UNA MASITA DE GRASA EN EL LABIO DERECHO ANTERIOR', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'CLIMASOY  + PHYTO SOYA GEL + LACTIBON FEM', 'especialidad_id' => 1434, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id' => 12938,'paciente_id' => 21425, 'medico_id' => 3, 'fecha' => '2016-07-04', 'sintomas' => '', 'diagnostico' => 'COLITIS', 'tratamiento' => 'KUFER Q  HEPAMERZ  COLAX  DOLGENAL  ROWATINEX  HCT  DIGESTOPAN FORTE', 'especialidad_id' => 1086, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id' => 12942,'paciente_id' => 21425, 'medico_id' => 24, 'fecha' => '2016-07-04', 'sintomas' => 'TOMA DE PAP', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => '', 'especialidad_id' => 1511, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id' => 13014,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2016-07-07', 'sintomas' => 'TOS  RINORREA  DOLOR EN ARTICULACIONES', 'diagnostico' => 'ARTRITIS', 'tratamiento' => 'VALERPAN  ABRILAR  ALERCET  MONTELUKAST MK  MIGRADORIXINA  DOLOCURAFLEX', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 67  Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id' => 13046,'paciente_id' => 5277, 'medico_id' => 3, 'fecha' => '2016-07-08', 'sintomas' => 'LEVE DOLOR EN HEMIABDOMEN DERECHO', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'ROWATINEX  UROCIT  HCT  DOLGENAL  OMEPRAZOL  DEBRIDAT  CONTUMAX  ACI TIP', 'especialidad_id' => 1086, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id' => 13434,'paciente_id' => 21425, 'medico_id' => 9, 'fecha' => '2016-07-27', 'sintomas' => 'control  imagenes  de columna lumbar id  hernia discal l4-l5+nodulo  de schmorld d9-l5', 'diagnostico' => 'HERNIA DISCAL', 'tratamiento' => 'analgesicos  relajantes musculares depo medrol 80mg', 'especialidad_id' => 1453, 'signos_vitales' => 'Peso: 94 Talla: 157 Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id' => 13478,'paciente_id' => 5277, 'medico_id' => 3, 'fecha' => '2016-07-29', 'sintomas' => 'ODINOFAGIA  TOS', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'CLAVINEX  CATAFLAN  ABRILAR  OMEPRAZOL  DICETEL  CONTUMAX  ROWATINEX  HCT  UROCIT BUCOGALLE', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 56  Presion: 100/60 '
             ]);
        DB::table('citas')->insert([
            'id' => 14613,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2016-09-22', 'sintomas' => 'DISNEA  DOLOR EN ARTICULACIONES  INSOMNIO', 'diagnostico' => 'ASMA BRONQUIAL', 'tratamiento' => 'VALERPAN  NEBULASMA  MONTELUKAST MK  CONDROSOL TRIO  ABRILAR', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 67  Presion: 130/80 '

             ]);
        DB::table('citas')->insert([
            'id' => 14840,'paciente_id' => 11700, 'medico_id' => 3, 'fecha' => '2016-10-04', 'sintomas' => '', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'OMEPRAZOL  ACI TIP  KUFER Q', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 91  Presion: 120/70 '

             ]);
        DB::table('citas')->insert([
            'id'=> 15443,'paciente_id' => 5651, 'medico_id' => 3, 'fecha' => '2016-11-08', 'sintomas' => 'DOLOR EN ANO  Y ABDOMEN INFERIOR  ESTREÑIMIENTO', 'diagnostico' => 'COLITIS', 'tratamiento' => 'DICETEL  FAKTU  CONTUMAX  ZALDIAR  MUCILAN', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 52  Presion: 90/70 '
             ]);
        DB::table('citas')->insert([
            'id'=> 16116,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2016-12-08', 'sintomas' => 'DISNEA  DOLOR EN RODILLAS  ESTERTORES SIBILANTES Y RONCANTES', 'diagnostico' => 'ASMA BRONQUIAL', 'tratamiento' => 'VALERPAN  NEBULASMA PLUS SINGULAIR 10 MG  DOLOCURAFLEX  GELICART  VENTOLYN', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 69  Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 16229,'paciente_id' => 5651, 'medico_id' => 3, 'fecha' => '2016-12-13', 'sintomas' => 'NO REFIERE DOLOR LUMBAR , YA CEDIO EL CUADRO DE COLON IRRITABLE', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'KUFER Q  ROWATINEX  HCT', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 51  Presion: 110/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 16225,'paciente_id' => 6552, 'medico_id' => 3, 'fecha' => '2016-12-13', 'sintomas' => 'DOLOR EN HD IRRADIADO A REGION LUMBAR  METEORISMO  BOCA AMARGA  EPIGASTRALGIA', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'KUFER Q  HEPAMERZ  OMEPRAZOL  ACI TIP  ENDIAL DIGEST  ROWATINEX  HCT DOLGENAL  ORLISTAT MK', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 67  Presion: 130/80 '

             ]);
        DB::table('citas')->insert([
            'id'=> 16642,'paciente_id' => 11700, 'medico_id' => 36, 'fecha' => '2017-01-06', 'sintomas' => 'paciente  de  63a diabetico  hace 3  años. con  glicemia  de 140   mg  operadopor  hernia  el  3  de  enero 2017. desde  entonces  se  comienza  a edematikzarse, aparente ascitis  y  edema de  ms  is, ha  recibido sueroe y  diureticos  vo. volumen urinario  minimo. siente  que  se  ahoga  no tolera decubito. ANTECEDENTE  DE TOMAR  AINES,', 'diagnostico' => 'INSUFICIENCIA RENAL', 'tratamiento' => 'REFERIDO A  HOSPITAL  IESS', 'especialidad_id' => 1661, 'signos_vitales' => 'Peso: 92  Presion: 90/60 '
             ]);
        DB::table('citas')->insert([
            'id'=> 16868,'paciente_id' => 5651, 'medico_id' => 3, 'fecha' => '2017-01-16', 'sintomas' => 'CONTINUA TRATAMIENTO', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'KUFER Q  ROWATINEX  HCT', 'especialidad_id' => 1086, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 17572,'paciente_id' => 5651, 'medico_id' => 3, 'fecha' => '2017-02-18', 'sintomas' => '', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'ROWATINEX  HCT', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 50  Presion: 100/65 '

             ]);
        DB::table('citas')->insert([
            'id'=> 17759,'paciente_id' => 24299, 'medico_id' => 10, 'fecha' => '2017-03-02', 'sintomas' => 'cefalea  fiebre malestar general', 'diagnostico' => 'OTITIS EXTERNA', 'tratamiento' => 'migra dorixina  isoprinosine  fluritox umbral', 'especialidad_id' => 1420, 'signos_vitales' => 'Peso: 63  Presion: 100/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 18171,'paciente_id' => 5651, 'medico_id' => 3, 'fecha' => '2017-03-20', 'sintomas' => 'SIGUE TRATAMIENTO', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'ROWATINEX  HCT  KUFER Q  BIL. ENZ.', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 50  Presion: 90/70 '
             ]);
        DB::table('citas')->insert([
            'id'=> 18202,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2017-03-21', 'sintomas' => 'DOLOR EN ARTICULACIONES DE MANOS', 'diagnostico' => 'ARTRITIS', 'tratamiento' => 'CRESTOR  FENOFIKAN  KUFER Q  HEPAMERZ  VALERPAN  MUCILAN  DIGESTOPAN FORTE', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 58  Presion: 110/70 '
             ]);
        DB::table('citas')->insert([
            'id'=> 18667,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2017-04-10', 'sintomas' => '', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'PREDNICORTEN  COLAX   KUFER Q  HEPAMERZ  TE DEGINSENG  DIGESTOPAN FORTE  METHOTREXATO  CRESTOR  ZENTEL  BIANOS', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 55  Presion: 90/70 '
             ]);
        DB::table('citas')->insert([
            'id'=> 18919,'paciente_id' => 5277, 'medico_id' => 36, 'fecha' => '2017-04-22', 'sintomas' => '', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => '', 'especialidad_id' => 1435, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 18984,'paciente_id' => 5651, 'medico_id' => 3, 'fecha' => '2017-04-25', 'sintomas' => '', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'R.C  HCT  KUFER Q  BIL. ENZ.', 'especialidad_id' => 1439, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 19011,'paciente_id' => 5651, 'medico_id' => 3, 'fecha' => '2017-04-26', 'sintomas' => 'DIFICULTAD PARA RESPIRAR', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'VALERPAN  DOLONEUROBION  MONTELUKAST  ALERCET  OSCILLOCOCCINUM', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 50  Presion: 100/60 '
             ]);
        DB::table('citas')->insert([
            'id'=> 19101,'paciente_id' => 5277, 'medico_id' => 3, 'fecha' => '2017-04-29', 'sintomas' => 'DOLOR EN REGION LUMBAR', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'ROWATINEX  HCT  DOLGENAL', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 57  Presion: 100/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 19110,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2017-04-29', 'sintomas' => '', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'PREDNICORTEN  KUFER Q  HEPACOLIN  TE DE GINSENG  CONTRALMOR', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 54  Presion: 100/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 19540,'paciente_id' => 5277, 'medico_id' => 3, 'fecha' => '2017-05-20', 'sintomas' => '', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'ROWATINEX  HCT  DOLGENAL CLIMASOY  KUFER ECV  HAPECO  ARGENON', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 56  Presion: 110/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 19839,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2017-06-07', 'sintomas' => 'DOLOR EN ARTICULACIONES DE MANOS', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'METHOTREXATO  CELEBREX  KUFER Q ECV  HEPACOLIN  ACIDO FOLICO', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 53  Presion: 100/70 '
             ]);
        DB::table('citas')->insert([
            'id'=> 19873,'paciente_id' => 23976, 'medico_id' => 24, 'fecha' => '2017-06-08', 'sintomas' => 'CAMPAÑA DE PAP, SECRESION BLANCA EN MODERADA CANTIDAD, TRAE RESULTADOS PARA CANCER FROTIS INFLAMATORIO G2  ATROFIA CELULAR  G 2 ,', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'FUTASOLE +  MISKOTATE +  POVIDYN', 'especialidad_id' => 1697, 'signos_vitales' => 'Peso: 64  Presion: 130/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 20057,'paciente_id' => 5651, 'medico_id' => 3, 'fecha' => '2017-06-17', 'sintomas' => 'DOLOR MODERADO EN ABDOMEN INFERIOR', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'R.C  IBUPROFENO', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 50  Presion: 90/60 '
             ]);
        DB::table('citas')->insert([
            'id'=> 20190,'paciente_id' => 5277, 'medico_id' => 3, 'fecha' => '2017-06-24', 'sintomas' => '', 'diagnostico' => 'COLITIS', 'tratamiento' => 'ROWATINEX  HCT  DOLGENAL  CLIMASOY  KUFER ECV  FLUIMUCIL  BUGOGALLE  COLAX  DICETEL  LEPRIT ENZ.', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 56  Presion: 100/70 '
             ]);
        DB::table('citas')->insert([
            'id'=> 20209,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2017-06-24', 'sintomas' => '', 'diagnostico' => 'ESTRENIMIENTO', 'tratamiento' => 'SERETIDE  25/125  ABRILAR  DOLOCURAFLEX  GELICART  CELEBREX', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 70  Presion: 130/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 20422,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2017-07-04', 'sintomas' => 'ODINOFAGIA  DOLORES ARTICULARES EN FALANGES', 'diagnostico' => 'AMIGDALITIS', 'tratamiento' => 'VALERPAN  AKIN  CATAFLAN  KUFER Q ECV  BUCOGALLE', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 53  Presion: 100/70 '
             ]);
        DB::table('citas')->insert([
            'id'=> 20455,'paciente_id' => 5651, 'medico_id' => 2, 'fecha' => '2017-07-05', 'sintomas' => 'av odi 20/20cc bm od cuerpo extraño corneal oi normal', 'diagnostico' => 'CUERPO EXTRANO OCULAR', 'tratamiento' => 'lamoflox', 'especialidad_id' => 1417, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 20463,'paciente_id' => 5651, 'medico_id' => 2, 'fecha' => '2017-07-05', 'sintomas' => 'cuerpo extraño corneal od', 'diagnostico' => 'CUERPO EXTRANO OCULAR', 'tratamiento' => 'lamoflox', 'especialidad_id' => 1499, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 20525,'paciente_id' => 5277, 'medico_id' => 3, 'fecha' => '2017-07-08', 'sintomas' => '', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'MELOXICAN  UVAMIN  CLIMASOY  ROWATINEX  HCT  LEPRIT ENZ.', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 56  Presion: 110/70 '
             ]);
        DB::table('citas')->insert([
            'id'=> 20523,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2017-07-08', 'sintomas' => '', 'diagnostico' => 'ANEMIA', 'tratamiento' => 'UNASYN  BIOSIL', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 52  Presion: 140/90 '
             ]);
        DB::table('citas')->insert([
            'id'=> 20701,'paciente_id' => 5651, 'medico_id' => 2, 'fecha' => '2017-07-18', 'sintomas' => '', 'diagnostico' => 'MIOPIA', 'tratamiento' => '', 'especialidad_id' => 1417, 'signos_vitales' => '   '

             ]);
        DB::table('citas')->insert([
            'id'=> 21116,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2017-08-09', 'sintomas' => 'DOLOR EN BRAZO', 'diagnostico' => 'COLITIS', 'tratamiento' => 'PREDNISOLONA  DOLONEUROBION  LYRICA  SOMASYNA  KUFER Q  ECV', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 52  Presion: 90/80 '

             ]);
        DB::table('citas')->insert([
            'id'=> 21189,'paciente_id' => 6552, 'medico_id' => 39, 'fecha' => '2017-08-15', 'sintomas' => '', 'diagnostico' => 'HIGADO GRASO', 'tratamiento' => '', 'especialidad_id' => 1435, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 21190,'paciente_id' => 6552, 'medico_id' => 3, 'fecha' => '2017-08-15', 'sintomas' => 'DOLOR EN HD  METEORISMO', 'diagnostico' => 'INFILTRACION GRASA DEL HIGADO', 'tratamiento' => 'KUFER Q ECV  HEPAMERZ  DIGESTOPAN FORTE  ROWATINEX  HCT  DOLGENAL  FIBRACK', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 67  Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 21291,'paciente_id' => 5277, 'medico_id' => 3, 'fecha' => '2017-08-19', 'sintomas' => 'DOLOR EN INGLE IZQ.  METEORISMO  MALESTAR LUMBAR', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'DEXAMETASONA  DICLOFENACO  ALZANOX   CREON   DIGESTA', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 58  Presion: 110/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 21447,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2017-08-28', 'sintomas' => '', 'diagnostico' => 'GASTRITIS', 'tratamiento' => 'CLIMASOY  PERLAVIT  KUFER Q ECV  PREDNICORTEN  DOLONEUROBION  KOBIL EMS', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 53  Presion: 90/60 '

             ]);
        DB::table('citas')->insert([
            'id'=> 21672,'paciente_id' => 5277, 'medico_id' => 3, 'fecha' => '2017-09-09', 'sintomas' => 'REFIERE LEVE MOLESTIA DE FLATULENCIA', 'diagnostico' => 'COLITIS', 'tratamiento' => 'DICETEL  LEPRIT ENZ.  ALZANOX  DIGESTA  COLMIBE  FENOFIKAN  HAPECO', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 57  Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 21753,'paciente_id' => 6552, 'medico_id' => 3, 'fecha' => '2017-09-13', 'sintomas' => '', 'diagnostico' => 'INFILTRACION GRASA DEL HIGADO', 'tratamiento' => 'KUFER Q ECV  COMPENSIAL  DIGESTOPAN FORTE  ROWATINEX  HCT  DOLGENAL  FIBRACK  ORLISTAT', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 66  Presion: 140/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 21873,'paciente_id' => 11700, 'medico_id' => 10, 'fecha' => '2017-09-18', 'sintomas' => 'MAREO DEZSDE HACE 1 AÑO', 'diagnostico' => 'TINICTUS', 'tratamiento' => 'PASEDOL   SOMAZINA GOT   NEUROBION', 'especialidad_id' => 1421, 'signos_vitales' => '  Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 21854,'paciente_id' => 28653, 'medico_id' => 9, 'fecha' => '2017-09-18', 'sintomas' => 'LUMBALGIA GONALGIA  BILATERAL SOBRE  PESO', 'diagnostico' => 'LUMBALGIA', 'tratamiento' => 'DEPO MEDROL +CELEBREX 20 MG', 'especialidad_id' => 1453, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 21989,'paciente_id' => 5277, 'medico_id' => 39, 'fecha' => '2017-09-23', 'sintomas' => '', 'diagnostico' => 'HIGADO GRASO', 'tratamiento' => '', 'especialidad_id' => 1435, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 22047,'paciente_id' => 11700, 'medico_id' => 10, 'fecha' => '2017-09-25', 'sintomas' => 'control', 'diagnostico' => 'ENFERMEDAD DE MENIERE', 'tratamiento' => 'delorat fisiol  betaserc  nimodilat', 'especialidad_id' => 1421, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 22055,'paciente_id' => 28653, 'medico_id' => 9, 'fecha' => '2017-09-26', 'sintomas' => 'controllumbalgia', 'diagnostico' => 'LUMBOCIATALGIA', 'tratamiento' => 'infiltracion metil prepnisolona', 'especialidad_id' => 1454, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 22119,'paciente_id' => 5277, 'medico_id' => 3, 'fecha' => '2017-09-30', 'sintomas' => 'DOLOR LEVE EN REGION LUMBAR DERECHA', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'ROWATINEX  HCT  DOLGENAL  DIGESTOPAN FORTE  OMEPRAZOL  ACI TIP  UROCIT', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 61  Presion: 140/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 22259,'paciente_id' => 28653, 'medico_id' => 1, 'fecha' => '2017-10-05', 'sintomas' => 'paciente hta a control', 'diagnostico' => 'HIPERTENSION ARTERIAL', 'tratamiento' => 'irbetan 300mg dipemina 500mg', 'especialidad_id' => 1428, 'signos_vitales' => 'Peso: 58 Talla: 149 Presion: 120/60 '
             ]);
        DB::table('citas')->insert([
            'id'=> 22339,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2017-10-11', 'sintomas' => 'SABOR AMARGO  LEVE DOLOR EN ARTICULACIONES', 'diagnostico' => 'ARTRITIS', 'tratamiento' => 'CLIMASOY  KUFER Q ECV  PREDNICORTEN  DOLONEUROBION  KOBIL EMS  VALCOTE ER  ENDIAL DIGEST', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 53  Presion: 130/70 '
             ]);
        DB::table('citas')->insert([
            'id'=> 22382,'paciente_id' => 6552, 'medico_id' => 3, 'fecha' => '2017-10-14', 'sintomas' => '', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'ROWATINEX  HCT  LASEA  ORLISTAT  KUFER Q ECV  LACFLAT  DIGESTOPAN FORTE', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 64  Presion: 130/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 22487,'paciente_id' => 11700, 'medico_id' => 3, 'fecha' => '2017-10-19', 'sintomas' => 'MAREO  EDEMA DE CARA', 'diagnostico' => 'DIABETES MELLITUS ', 'tratamiento' => 'BETASERC  ALEATEL  NEUROBION  DEXAMETASONA   CINAGERON', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 65  Presion: 140/90 '
             ]);
        DB::table('citas')->insert([
            'id'=> 22871,'paciente_id' => 28653, 'medico_id' => 3, 'fecha' => '2017-11-13', 'sintomas' => 'DOLOR EN FD  METEORISMO', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'COLAX  DIGESTOPAN FORTE  KUFER Q ECV', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 60  Presion: 130/70 '
             ]);
        DB::table('citas')->insert([
            'id'=> 22983,'paciente_id' => 28653, 'medico_id' => 39, 'fecha' => '2017-11-21', 'sintomas' => '', 'diagnostico' => 'HIGADO GRASO', 'tratamiento' => '', 'especialidad_id' => 1435, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 22986,'paciente_id' => 28653, 'medico_id' => 3, 'fecha' => '2017-11-21', 'sintomas' => '', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'UVAMIN  DIGESTOPAN FORTE  KUFER Q ECV  DIGESTOPAN FORTE  ABRILAR  ALERCET  ROWATINEX  HCT  DOLGENAL', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 58  Presion: 130/60 '
             ]);
        DB::table('citas')->insert([
            'id'=> 23305,'paciente_id' => 5651, 'medico_id' => 1, 'fecha' => '2017-12-08', 'sintomas' => 'paciente viene por nervios-taquicardia-hipÃ³tension', 'diagnostico' => 'VALORACION CARDIOLOGICA', 'tratamiento' => 'mapa y holter de ekg', 'especialidad_id' => 1607, 'signos_vitales' => 'Peso: 50 Talla: 149 Presion: 90/60 '
             ]);
        DB::table('citas')->insert([
            'id'=> 23331,'paciente_id' => 6552, 'medico_id' => 3, 'fecha' => '2017-12-09', 'sintomas' => 'DOLOR EN REGION LUMBAR', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'ROWATINEX  HCT  DOLGENAL  FIBRACK  KUFER Q ECV  LASEA  DIGESTOPAN FORTE  ALEVIAN DUO', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 64  Presion: 140/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 23374,'paciente_id' => 5651, 'medico_id' => 1, 'fecha' => '2017-12-12', 'sintomas' => 'paciente con cuadro de ansiedad,nervios,palpitaciones', 'diagnostico' => 'ARRITMIA CARDIACA', 'tratamiento' => 'complemento vitaminico vot b-valeriana bid 20 gotas', 'especialidad_id' => 1428, 'signos_vitales' => 'Peso: 50 Talla: 148 Presion: 90/60 '
             ]);
        DB::table('citas')->insert([
            'id'=> 23399,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2017-12-13', 'sintomas' => '', 'diagnostico' => 'ARTRITIS', 'tratamiento' => 'PREDNICORTEN  DOLONEUROBION  KUFER Q ECV  OMEPRAZOL  CLIMASOY', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 53  Presion: 120/70 '
             ]);
        DB::table('citas')->insert([
            'id'=> 23800,'paciente_id' => 5277, 'medico_id' => 24, 'fecha' => '2018-01-06', 'sintomas' => 'dolor pelvico   de +-  2 meses   gases  , reflujo gastrico , cefalea intensa  ,  secresion amarilla no fetida acompañada  solo x fuera  aplico   ovulo,   orina a cada rato    aveces  le arde, al examen presenta secresion blanca en moderada cantidad  gases', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'creom 25+   kufer q + etrom + vagyl c +  uvamin retard +  dolgenal sl', 'especialidad_id' => 1434, 'signos_vitales' => 'Peso: 58  Presion: 120/70 '
             ]);
        DB::table('citas')->insert([
            'id'=> 23894,'paciente_id' => 24299, 'medico_id' => 2, 'fecha' => '2018-01-10', 'sintomas' => 'av odi 20/20cc od +1.00esf-0.50cilx90 oi +1.50esf-0.50cilx15 add odi +3.00esf bm odi normal oi pterigion recidivado pio od 17mmhg oi 14mmhg', 'diagnostico' => 'DEFICIT VISUAL', 'tratamiento' => 'lentes y dropstar', 'especialidad_id' => 1416, 'signos_vitales' => '  Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 23965,'paciente_id' => 5277, 'medico_id' => 24, 'fecha' => '2018-01-13', 'sintomas' => 'toma de pap secresion amarilla en moderada cantidad + cervicitis sangrante', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => '', 'especialidad_id' => 1511, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 23961,'paciente_id' => 27062, 'medico_id' => 39, 'fecha' => '2018-01-13', 'sintomas' => '', 'diagnostico' => 'HIGADO GRASO', 'tratamiento' => '', 'especialidad_id' => 1435, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 23962,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2018-01-13', 'sintomas' => 'DOLOR EN INTERFALANGICAS', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'METICORTEN  DOLOCURAFLEX  GELICART  METHOTREXATO  MELOXICAN', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 53  Presion: 100/70 '
             ]);
        DB::table('citas')->insert([
            'id'=> 23998,'paciente_id' => 11700, 'medico_id' => 1, 'fecha' => '2018-01-15', 'sintomas' => 'paciente no es hta x mapa', 'diagnostico' => 'VALORACION CARDIOLOGICA', 'tratamiento' => 'nervioso bid complemento vitaminico bid omeprazol 20mg bid-anautin bid', 'especialidad_id' => 1428, 'signos_vitales' => 'Peso: 70 Talla: 159 Presion: 140/90 '
             ]);
        DB::table('citas')->insert([
            'id'=> 24054,'paciente_id' => 23976, 'medico_id' => 36, 'fecha' => '2018-01-17', 'sintomas' => 'EDAD  54  A  PESO 64  KG -  MC  RASH  GENERALIZADO.  REPORTE  DE COLESTEROL+300  MG  GLICEMIA. 114 MG', 'diagnostico' => 'INSUFICIENCIA HEPATODIGESTIVA', 'tratamiento' => 'CEFALEXINA   ATOVAROL. HIDROXINA  KUFER  Q  C 1000,', 'especialidad_id' => 1661, 'signos_vitales' => 'Peso: 64  Presion: 140/90 '
             ]);
        DB::table('citas')->insert([
            'id'=> 24079,'paciente_id' => 23976, 'medico_id' => 39, 'fecha' => '2018-01-18', 'sintomas' => '', 'diagnostico' => 'HIGADO GRASO', 'tratamiento' => '', 'especialidad_id' => 1435, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 24103,'paciente_id' => 23976, 'medico_id' => 36, 'fecha' => '2018-01-19', 'sintomas' => '', 'diagnostico' => 'RINOFARINGITIS', 'tratamiento' => '', 'especialidad_id' => 1661, 'signos_vitales' => 'Peso: 64  Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 24243,'paciente_id' => 24299, 'medico_id' => 3, 'fecha' => '2018-01-26', 'sintomas' => 'MALESTAR GENERAL   EPIGASTRALGIA  ODINOFAGIA', 'diagnostico' => 'LITIASIS BILIAR', 'tratamiento' => 'OMEPRAZOL ACI TIP  ANALGAN  DOLOCURAFLEX  DIPEMINA MEDIAS  KUFER Q ECV  HEPAMERZ  ROWATINEX  HCT  DOLGENAL', 'especialidad_id' => 1085, 'signos_vitales' => 'Peso: 63  Presion: 100/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 24252,'paciente_id' => 24299, 'medico_id' => 39, 'fecha' => '2018-01-26', 'sintomas' => '', 'diagnostico' => 'HIGADO GRASO', 'tratamiento' => '', 'especialidad_id' => 1597, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 24287,'paciente_id' => 11700, 'medico_id' => 2, 'fecha' => '2018-01-27', 'sintomas' => 'AV ODI 20/50CC OD +3.00ESF-2.00CILX90 OI +2.50ESF-2.0CILX100 ADD ODI +3.00ESF  BM ODI CATARATA +  PIO ODI 16MMHG', 'diagnostico' => 'SEQUEDAD OCULAR', 'tratamiento' => 'CONTROLES DE SU PRESION ARTERIAL CON SU CARDIOLOGO ASTEROSS Y OCUSIGHT ', 'especialidad_id' => 1494, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 24292,'paciente_id' => 11700, 'medico_id' => 3, 'fecha' => '2018-01-29', 'sintomas' => 'DOLOR EN HD', 'diagnostico' => 'SINDROME DISPEPTICO', 'tratamiento' => 'KUFER Q ECV  ALEVIAN DUO  HEPAMERZ  DIGESTOPAN FORTE', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 70  Presion: 130/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 24293,'paciente_id' => 11700, 'medico_id' => 39, 'fecha' => '2018-01-29', 'sintomas' => '', 'diagnostico' => 'HIGADO GRASO', 'tratamiento' => '', 'especialidad_id' => 1435, 'signos_vitales' => 'Peso: 70  Presion: 130/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 24403,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2018-02-03', 'sintomas' => '', 'diagnostico' => 'ARTRITIS', 'tratamiento' => 'PREDNISONA  PREDNICORTEN  BIOSIL  METHOTREXATO MELOXICAN', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 53  Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 24589,'paciente_id' => 11700, 'medico_id' => 1, 'fecha' => '2018-02-16', 'sintomas' => 'paciente no es hta,refiere', 'diagnostico' => 'HIPERTENSION ARTERIAL', 'tratamiento' => 'nervinetas cada 8 horas anautin tid-zaldiar bid', 'especialidad_id' => 1428, 'signos_vitales' => 'Peso: 70 Talla: 161 Presion: 160/90 '
             ]);
        DB::table('citas')->insert([
            'id'=> 24645,'paciente_id' => 11700, 'medico_id' => 1, 'fecha' => '2018-02-19', 'sintomas' => 'paciente viene a control x mareo intenso', 'diagnostico' => 'VALORACION CARDIOLOGICA', 'tratamiento' => 'anautin cada 4 horas(7 am-11 am-3 pm-7 pm-11 pm-nervinetas cada 8 horas-zaldiar 1 cada almuerzo', 'especialidad_id' => 1428, 'signos_vitales' => 'Peso: 69 Talla: 160 Presion: 130/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 24768,'paciente_id' => 11700, 'medico_id' => 1, 'fecha' => '2018-02-23', 'sintomas' => 'PACIENTE CON CUADRO DE MENIER', 'diagnostico' => 'HIPERTENSION ARTERIAL', 'tratamiento' => 'ZETIX 7.5 MG-DIGESTOPAN-FERRUM JASRABE BETASERC ANAUTIN', 'especialidad_id' => 1428, 'signos_vitales' => 'Peso: 69 Talla: 159 Presion: 140/90 '
             ]);
        DB::table('citas')->insert([
            'id'=> 24774,'paciente_id' => 24299, 'medico_id' => 24, 'fecha' => '2018-02-24', 'sintomas' => 'toma de pap , secresion blanca en moderda cantidad', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => '', 'especialidad_id' => 1489, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 24988,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2018-03-06', 'sintomas' => 'DOLOR EN INTERFALANGICAS  DOLOR EN OCCIPITAL', 'diagnostico' => 'ARTRITIS', 'tratamiento' => 'PREDNICORTEN DOLOCURAFLEX  GELICART  METHOTREXATO  KUFER Q ECV', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 53  Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 25061,'paciente_id' => 5651, 'medico_id' => 3, 'fecha' => '2018-03-09', 'sintomas' => 'INSOMNIO  PALPITACIONES EN CEREBRO', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'CLIMASOY  LUVIT  KOBIL EMS  NEOGAIVAL  CRESTOR  GIABRI DIPEMINA', 'especialidad_id' => 1460, 'signos_vitales' => 'Peso: 50  Presion: 100/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 25089,'paciente_id' => 5277, 'medico_id' => 24, 'fecha' => '2018-03-10', 'sintomas' => 'paciente acude a consulta trae resultados de pap reporta negativo para cancer frotis inflamatorio g2 , atrofia  celular paciente refiere que', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'tricofem duo + fluconazol + ensoy diabetico', 'especialidad_id' => 1434, 'signos_vitales' => 'Peso: 58  Presion: 110/60 '
             ]);
        DB::table('citas')->insert([
            'id'=> 25521,'paciente_id' => 24517, 'medico_id' => 24, 'fecha' => '2018-03-28', 'sintomas' => 'PACIENTE ACUDE A CONSULTA POR  CONTROL PRENATAL   ULTIMO ABORT0  6 ENERO 2017  ,  REFIERE   EPIGASTRALGIA   ESTA TOMANDO ACIDO FOLICO  , SIALORREA  ,  ORINA NORMAL  , SECRESION  AMARILLA NO SE APLICO NIGUNA MEDICACION .  TRAE  ECOGRAFIA  REPORTA  UETRO AUMENTADO  DE TAMAÑO CON PRESENCIA DE SACO GESTACIONAL  CON FETO UNICOO VIVO EN SU INTERIOR  S/G  5.49 MM  CORRESPONDE  A 5 S/0 G   DECIDUA   CIRCULAR  NORMAL  SE VISUALIZA  LIQUIDO EN FONDO DE  SACO EPI . FPP  28/11 2018   , ID EMBARAZO +- 5   S /G', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'SUPRENAT  + ENSOY  +  REDOXON  + CLINDACIN -K    +  AMPICILINA 500MG +', 'especialidad_id' => 1434, 'signos_vitales' => 'Peso: 78  Presion: 130/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 25527,'paciente_id' => 24517, 'medico_id' => 39, 'fecha' => '2018-03-28', 'sintomas' => '', 'diagnostico' => 'EMBARAZO', 'tratamiento' => '', 'especialidad_id' => 1537, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 25688,'paciente_id' => 24517, 'medico_id' => 24, 'fecha' => '2018-04-05', 'sintomas' => 'paciente acude a consulta por control  de infeccion vaginal', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'analgan 1g  +  ensoy  + redoxon +', 'especialidad_id' => 1434, 'signos_vitales' => 'Peso: 78  Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 25904,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2018-04-14', 'sintomas' => '', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'PREDNICORTEN  GELICART   METHOTREXATO  KUFER Q ECV  TENSIFLEX', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 54  Presion: 100/70 '
             ]);
        DB::table('citas')->insert([
            'id'=> 25945,'paciente_id' => 24517, 'medico_id' => 24, 'fecha' => '2018-04-16', 'sintomas' => 'PACIENTE ACUDE A CONSULTA POR  QUE EL DIA DE AYER PRESENTO LEVE SANGRADO TRANSVAGINAL   ,  AL EXAMEN PRESENTA LEVE DOLOR Y LEVE SANGRADO ACHOCOLATADO', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'REDOXON 1G +  GESLUTIN 100MG +  UVAMIN RETARD + ETROM OVULOS  + B-DEX + CEMIN', 'especialidad_id' => 1434, 'signos_vitales' => 'Peso: 79  Presion: 130/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 26140,'paciente_id' => 24517, 'medico_id' => 39, 'fecha' => '2018-04-24', 'sintomas' => '', 'diagnostico' => 'EMBARAZO', 'tratamiento' => '', 'especialidad_id' => 1537, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 26141,'paciente_id' => 24517, 'medico_id' => 24, 'fecha' => '2018-04-24', 'sintomas' => 'paciente acude a consulta por  trae eco reporta utero aumentado de tamaño con presencia de saco gestacional   con feto  unico vivo en su interior  crl 19.80 mm corresponde 8.3 dias de gestacion  de gestacion  decidua circular normal no se visualiza  desprendimiento  fcf 178 x m , fpp 1/12/18 , id  8 s/g  ,  trae examenes ht 38.4 , hb 12.2 , plaquetas 13.260 , , hematies 3.990 , vdrl no reactivo , grupo sanguineo a positivo  vih negativo , glucosa 88.1 , urea 14.1 creatinina 0.62 ac urico 3.0 ,  citomegalovirus  igg 50.00 , cito igm 0.205, redto negativo , ex orina amarillo , ph 6 .0  hepatitis negativo', 'diagnostico' => 'PRE-ECLAMPSIA', 'tratamiento' => 'nutralogics + ensoy + combiron folico +   tricofem duo + liondox plus esposo ).', 'especialidad_id' => 1434, 'signos_vitales' => 'Peso: 78  Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 26160,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2018-04-25', 'sintomas' => 'TOS  DISNEA  FLEMA  DOLOR EN RODILLAS', 'diagnostico' => 'ASMA BRONQUIAL', 'tratamiento' => 'VALERPAN  NEBULASMA PLUS  SINGULAIR  TREX  DOLOCURAFLEX  GELICART', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 68  Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 26717,'paciente_id' => 28653, 'medico_id' => 9, 'fecha' => '2018-05-21', 'sintomas' => 'LUMBAGIA +ciatalgia', 'diagnostico' => 'LUMBOCIATALGIA', 'tratamiento' => 'infiltracion +analgesixos', 'especialidad_id' => 1453, 'signos_vitales' => 'Peso: 58 Talla: 149 Presion: 100/60 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 26815,'paciente_id' => 5277, 'medico_id' => 24, 'fecha' => '2018-05-26', 'sintomas' => 'trae  cultivo de secresion vaginal  proteus miravilis , amox/ac clavulanico , ampicilina , ceftriazone , clindamicina , gentamicina , trimetropin /sulfa , refiere que con la crtema y ovulos sentia que le ardia', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'gentamicina +  redoxon +vagyl c + vaginsol -f + flurostic', 'especialidad_id' => 1733, 'signos_vitales' => 'Peso: 57 Talla: 160 Presion: 100/80 Temperatura: 34'
             ]);
        DB::table('citas')->insert([
            'id'=> 26899,'paciente_id' => 24517, 'medico_id' => 24, 'fecha' => '2018-05-31', 'sintomas' => 'paciente acude a consulta por control refiere secresion  blanca sin prurito  sin molestia al orinar , dolor cabeza presento el martes  y el mismo dia presenta falta de la respiracion  y cosquilleo en los senos , dolor en region lumbar refiere que tiene antecedentes de calculos   , al examen presenta fcf 135 x minutos, al especulo presenta  secresion blanca  , trae eco reporta fc 153 x minutos , posicion indiferente  dorso posterior , liquido amniotico , plkacenta cara anterior , placenta cara anterior  movimikentos fetales  normales dbp 26.74 mm corresponde a 14 .3 dias , fl 15.48mm corresponde a 14. 3 , ac 81.94 ,  corresponde a 14. 3 dias de gestacion ,  grado de madurez  placentaria 0/3 , fpp 26/11/2018 , peso 96 .85  gr id emb +-  14 s/g', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'calcibon natal forte + redoxon', 'especialidad_id' => 1733, 'signos_vitales' => 'Peso: 81 Talla: 160 Presion: 110/60 Temperatura: 37'
             ]);
        DB::table('citas')->insert([
            'id'=> 26918,'paciente_id' => 24517, 'medico_id' => 39, 'fecha' => '2018-05-31', 'sintomas' => '', 'diagnostico' => 'EMBARAZO', 'tratamiento' => '', 'especialidad_id' => 1436, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 27097,'paciente_id' => 5277, 'medico_id' => 39, 'fecha' => '2018-06-09', 'sintomas' => '', 'diagnostico' => 'HIGADO GRASO', 'tratamiento' => '', 'especialidad_id' => 1435, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 27102,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2018-06-09', 'sintomas' => '', 'diagnostico' => 'ARTRITIS', 'tratamiento' => 'PREDNICORTEN  ARCOXIA  GELICART ACTION  METHOTREXATO  KUFER Q ECV  ACIDO FOLICO', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 54 Talla: 150 Presion: 100/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 27424,'paciente_id' => 28653, 'medico_id' => 9, 'fecha' => '2018-06-26', 'sintomas' => 'paciente refierelumbociatalgia', 'diagnostico' => 'LUMBOCIATALGIA', 'tratamiento' => 'infiltracion metil prpnosolona  80 mg', 'especialidad_id' => 1454, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 27824,'paciente_id' => 27062, 'medico_id' => 3, 'fecha' => '2018-07-14', 'sintomas' => 'DOLOR LEVE EN MANOS', 'diagnostico' => 'ARTRITIS', 'tratamiento' => 'PREDNICORTEN  GELICART ACTION  METHOTREXATO  KUFER Q ECV  OSTEOBLASTOL  ENDIAL DIGEST', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 55 Talla: 150 Presion: 110/80 Temperatura: 35'
             ]);
        DB::table('citas')->insert([
            'id'=> 27894,'paciente_id' => 24517, 'medico_id' => 24, 'fecha' => '2018-07-17', 'sintomas' => 'CONTROL PRENATAL', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'CALCIBON  NATAL  FORTE', 'especialidad_id' => 1733, 'signos_vitales' => 'Peso: 83 Talla: 160 Presion: 120/80 Temperatura: 35'
             ]);
        DB::table('citas')->insert([
            'id'=> 27895,'paciente_id' => 24517, 'medico_id' => 39, 'fecha' => '2018-07-17', 'sintomas' => '', 'diagnostico' => 'EMBARAZO', 'tratamiento' => '', 'especialidad_id' => 1436, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 28526,'paciente_id' => 24517, 'medico_id' => 24, 'fecha' => '2018-08-21', 'sintomas' => 'paciente acude a consulkta embarazo de 25.4 s/g ,', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'calcibon + vitamina c+  acetol acetil salicidico +   digestopan', 'especialidad_id' => 1733, 'signos_vitales' => 'Peso: 84 Talla: 159 Presion: 120/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 28527,'paciente_id' => 24517, 'medico_id' => 39, 'fecha' => '2018-08-21', 'sintomas' => '', 'diagnostico' => 'GASTRITIS', 'tratamiento' => '', 'especialidad_id' => 1436, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 28538,'paciente_id' => 6552, 'medico_id' => 1, 'fecha' => '2018-08-22', 'sintomas' => 'paciente hta a control a los 2 años', 'diagnostico' => 'VALORACION CARDIOLOGICA', 'tratamiento' => 'sugiero actualizar mapa y ecocardio media tableta de valsartan 160/25mg', 'especialidad_id' => 1428, 'signos_vitales' => 'Peso: 71 Talla: 143 Presion: 140/90 Temperatura: 35'
             ]);
        DB::table('citas')->insert([
            'id'=> 28603,'paciente_id' => 6552, 'medico_id' => 1, 'fecha' => '2018-08-25', 'sintomas' => 'paciente viene a control por ser hta', 'diagnostico' => 'HIPERTENSION ARTERIAL', 'tratamiento' => 'telmaxan 80mg media tableta cada mnañana mas fenofikan 1 tableta en la merienda pasando 1 dia', 'especialidad_id' => 1428, 'signos_vitales' => 'Peso: 69 Talla: 143 Presion: 120/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 28766,'paciente_id' => 28653, 'medico_id' => 3, 'fecha' => '2018-09-03', 'sintomas' => 'DOLOR EN CADERA DERECHA  EDEMA DE PIE IZQ.  HAY PRESENCIA DE ARAÑAS VASCULARES EN PIERNAS  DISURIA', 'diagnostico' => 'ARTROSIS', 'tratamiento' => 'UVAMIN  NEUROBION  ARCOXIA  DIOSMIN  MENAVEN  DOLITIL', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 58 Talla: 147 Presion: 130/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 28865,'paciente_id' => 28653, 'medico_id' => 1, 'fecha' => '2018-09-07', 'sintomas' => 'paciente hta a control', 'diagnostico' => 'HIPERTENSION ARTERIAL', 'tratamiento' => 'telmaxan 80mg nervinetas bid-complejo b bid-mapa ibuprofeno bid 400mg-sugiero fondo de ojo-', 'especialidad_id' => 1524, 'signos_vitales' => 'Peso: 58 Talla: 147 Presion: 140/80 Temperatura: 37'
             ]);
        DB::table('citas')->insert([
            'id'=> 28896,'paciente_id' => 28653, 'medico_id' => 2, 'fecha' => '2018-09-08', 'sintomas' => 'EXAMEN VISUAL', 'diagnostico' => 'CATARATA', 'tratamiento' => 'SEGUIR CONTROLES E SU PRESION ARTERIAL CON SU CARDIOLOGO', 'especialidad_id' => 1494, 'signos_vitales' => 'Peso: 58 Talla: 157 Presion: 130/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 29159,'paciente_id' => 6552, 'medico_id' => 1, 'fecha' => '2018-09-24', 'sintomas' => 'PACIENT ESTABLE', 'diagnostico' => 'HIPERTENSION ARTERIAL', 'tratamiento' => 'FENOFIKAN 160MG 1Â´PASANDO 1 DIA TELMAXAN 40MG', 'especialidad_id' => 1428, 'signos_vitales' => 'Peso: 72 Talla: 144 Presion: 120/70 Temperatura: 37'
             ]);
        DB::table('citas')->insert([
            'id'=> 29263,'paciente_id' => 28653, 'medico_id' => 3, 'fecha' => '2018-10-01', 'sintomas' => '', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'VALERPAN  DOLOCURAFLEX  DOLITIL  DIOSMIN', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 59 Talla: 148 Presion: 130/80 Temperatura: 35'
             ]);
        DB::table('citas')->insert([
            'id'=> 29348,'paciente_id' => 11700, 'medico_id' => 39, 'fecha' => '2018-10-05', 'sintomas' => '', 'diagnostico' => 'APENDICITIS', 'tratamiento' => '', 'especialidad_id' => 1555, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 29529,'paciente_id' => 24517, 'medico_id' => 24, 'fecha' => '2018-10-16', 'sintomas' => 'control prenatal  embarazo de 34.4 s/g + amenaza de parto prematuro comenzo en 30 septiembre ya con maduracion pulmonar', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'calcibon natal forte + redoxon+ etrom ovulos', 'especialidad_id' => 1733, 'signos_vitales' => 'Peso: 88 Talla: 160 Presion: 120/80 Temperatura: 35'
             ]);
        DB::table('citas')->insert([
            'id'=> 29780,'paciente_id' => 24517, 'medico_id' => 24, 'fecha' => '2018-10-30', 'sintomas' => 'embarazo de 36.4 s/g x fum x eco 38   s/g  trabajo de parto   derivada al subcentro de salud o a la maternidad  dilat 3 cc . b 40 porciento ,   fcf 140 ,   dorso derecho   cefalico', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => '', 'especialidad_id' => 1733, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 29781,'paciente_id' => 24517, 'medico_id' => 39, 'fecha' => '2018-10-30', 'sintomas' => '', 'diagnostico' => 'EMBARAZO', 'tratamiento' => '', 'especialidad_id' => 1435, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 29930,'paciente_id' => 24517, 'medico_id' => 39, 'fecha' => '2018-11-10', 'sintomas' => '', 'diagnostico' => 'HIGADO GRASO', 'tratamiento' => '', 'especialidad_id' => 1436, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 29931,'paciente_id' => 24517, 'medico_id' => 24, 'fecha' => '2018-11-10', 'sintomas' => 'embarazada de 38 s/g atermino  con dilatacion de 4 cc y 40 x ciento dilatacion', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'nifedipina 10mg', 'especialidad_id' => 1733, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 29988,'paciente_id' => 5651, 'medico_id' => 3, 'fecha' => '2018-11-13', 'sintomas' => 'DOLOR EN REGION ANAL  PCTE NO DEJA EXAMINAR', 'diagnostico' => 'HEMORROIDES', 'tratamiento' => 'DAFLON  CONTRALMOR  DEXAMETASONA  DICASEN  REBLAND', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 51 Talla: 148 Presion: 100/70 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 30505,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2018-12-13', 'sintomas' => 'PCTE CON DISNEA  SE ENCUENTRAS ESTERTORES RONCANTES Y SIBILANTES', 'diagnostico' => 'FARINGITIS', 'tratamiento' => 'SERETIDE 25/125   SINGULAIR  VALERPAN  BRONCOT', 'especialidad_id' => 1458, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 30597,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2018-12-20', 'sintomas' => '', 'diagnostico' => 'RINOFARINGITIS', 'tratamiento' => 'AEROFLUX  SINGULAIR  ABRILAR', 'especialidad_id' => 1458, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 30892,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2019-01-12', 'sintomas' => 'PCTE CON BUENA FUNCION RESPIRATORIA', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'SINGULAIR  REDOXON ZINC', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 66 Talla: 148 Presion: 120/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 31573,'paciente_id' => 23976, 'medico_id' => 3, 'fecha' => '2019-02-21', 'sintomas' => 'RINORREA  FLATULENCIA DOLOR EN ABDOMEN BAJO', 'diagnostico' => 'ARTROSIS', 'tratamiento' => 'DEGRALER    OSCILLOCOCINUM  DEPOMEDROL  COLAX  ALEVIAN DUO  CODIPRONT', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 60 Talla: 139 Presion: 140/90 Temperatura: 35'
             ]);
        DB::table('citas')->insert([
            'id'=> 31574,'paciente_id' => 23976, 'medico_id' => 40, 'fecha' => '2019-02-21', 'sintomas' => 'Incontinencia urinaria por esfuerzo', 'diagnostico' => 'INCONTINENCIA URINARIA', 'tratamiento' => 'Fangan plus 1 ovulo cada noche por 3 dias fluconazol 150mg 1 capsula VO por semana x 2 semanas Atormibe 20/10 una tableta vo diaria en merienda por 30 dÃ­as novurit 5mg 1 tableta VO diaria a las 8:00pm por 20 dÃ­as Akin 1g una ampolla IM diaria por 2 dÃ­as', 'especialidad_id' => 1733, 'signos_vitales' => 'Peso: 60 Talla: 139 Presion: 140/90 Temperatura: 35'
             ]);
        DB::table('citas')->insert([
            'id'=> 31608,'paciente_id' => 24299, 'medico_id' => 39, 'fecha' => '2019-02-23', 'sintomas' => '', 'diagnostico' => 'HIGADO GRASO', 'tratamiento' => '', 'especialidad_id' => 1704, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 31661,'paciente_id' => 23976, 'medico_id' => 3, 'fecha' => '2019-02-27', 'sintomas' => 'LEVE DOLOR EN RODILLAS  DOLOR EN CUELLO', 'diagnostico' => 'ARTROSIS', 'tratamiento' => 'BIOFLORA PLUS  DIGESTOPAN FORTE  DOLOCURAFLEX', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 59 Talla: 138 Presion: 120/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 31765,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2019-03-07', 'sintomas' => 'TOS  ESTORNUDO  SIBILANCIAS  DISNEA DE MINIMOS ESFUERZOS', 'diagnostico' => 'ASMA BRONQUIAL', 'tratamiento' => 'VALERPAN  AEROFLUX  SINGULAIR  DEGRALER  ATARAX', 'especialidad_id' => 1458, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 31931,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2019-03-14', 'sintomas' => 'AL MOMENTO HAY BUENA EVOLUCION', 'diagnostico' => 'ASMA BRONQUIAL', 'tratamiento' => 'ABRILAR  SINGULAIR  REDOXON', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 64 Talla: 147 Presion: 120/80 Temperatura: 37'
             ]);
        DB::table('citas')->insert([
            'id'=> 32031,'paciente_id' => 23976, 'medico_id' => 3, 'fecha' => '2019-03-18', 'sintomas' => 'LEVE CEFALEA', 'diagnostico' => 'COLITIS', 'tratamiento' => 'DEGRALER  GELICART   ATORVASTATINA   VALCOTE ER   NEOGAIVAL', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 60 Talla: 137 Presion: 120/80 Temperatura: 37'
             ]);
        DB::table('citas')->insert([
            'id'=> 32179,'paciente_id' => 11700, 'medico_id' => 3, 'fecha' => '2019-03-26', 'sintomas' => 'DEBILIDAD NEUROMUSCULAR', 'diagnostico' => 'DIABETES MELLITUS ', 'tratamiento' => 'DOLONEUROBION  KUFER Q ECV  GELICART ACTION', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 70 Talla: 160 Presion: 120/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 32188,'paciente_id' => 11700, 'medico_id' => 39, 'fecha' => '2019-03-26', 'sintomas' => '', 'diagnostico' => 'HIGADO GRASO', 'tratamiento' => '', 'especialidad_id' => 1435, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 32197,'paciente_id' => 11700, 'medico_id' => 3, 'fecha' => '2019-03-26', 'sintomas' => '', 'diagnostico' => 'ARTROSIS', 'tratamiento' => 'OXINOL  FERRUM  OSTEOBLASTOL', 'especialidad_id' => 1086, 'signos_vitales' => 'Peso: 79 Talla: 159 Presion: 140/90 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 32659,'paciente_id' => 11700, 'medico_id' => 3, 'fecha' => '2019-04-22', 'sintomas' => 'DEBILIDAD EN LAS PIERNAS  FLATULENCIA', 'diagnostico' => 'COLITIS', 'tratamiento' => 'DIPEMINA  FERRUM  NEUROBION  KUFER Q ECV  BIO T ZINC  DIGESTOPAN FORTE', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 63 Talla: 160 Presion: 120/80 Temperatura: 37'
             ]);
        DB::table('citas')->insert([
            'id'=> 32927,'paciente_id' => 23976, 'medico_id' => 3, 'fecha' => '2019-05-08', 'sintomas' => '', 'diagnostico' => 'ARTROSIS', 'tratamiento' => 'GELICART  MIGRADORIXINA  VALERIANA  DIPEMINA', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 60 Talla: 138 Presion: 120/70 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 33239,'paciente_id' => 6552, 'medico_id' => 39, 'fecha' => '2019-05-27', 'sintomas' => '', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => '', 'especialidad_id' => 1435, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 33240,'paciente_id' => 6552, 'medico_id' => 3, 'fecha' => '2019-05-27', 'sintomas' => 'DOLOR EN HD Y FD  FLATULENCIA', 'diagnostico' => 'LITIASIS RENAL', 'tratamiento' => 'ROWATINEX  HCT  DOLGENAL  DIGESTOPAN FORTE  KUFER Q ECV HEPALIVE ADVANCE', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 71 Talla: 144 Presion: 130/80 Temperatura: 37'
             ]);
        DB::table('citas')->insert([
            'id'=> 33382,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2019-06-04', 'sintomas' => '', 'diagnostico' => 'ASMA BRONQUIAL', 'tratamiento' => 'ALLEGRA  SINGULAIR  SERETIDE 25/125  DEXAMETASONA', 'especialidad_id' => 1458, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 33375,'paciente_id' => 23976, 'medico_id' => 40, 'fecha' => '2019-06-04', 'sintomas' => 'Toma de muestra Papanicolau', 'diagnostico' => 'PAPANICOLAU', 'tratamiento' => 'Uvamin 1 capsula VO cada 12 horas por 5 dÃ­as. gentamicina 280mg 1 ampolla IM diaria por 3 dÃ­as locator 1 ovulo cada noche por 7 dÃ­as vagil C 1 aplicaciÃ³n cada noche.', 'especialidad_id' => 1756, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 33520,'paciente_id' => 23976, 'medico_id' => 40, 'fecha' => '2019-06-11', 'sintomas' => 'REVISIÃ“N DE EXAMENES', 'diagnostico' => 'VAGINITIS BACTERIANA', 'tratamiento' => 'BACTOCILINA 750MG 1 TABLETA VO DIARIA POR 5 DÃAS GENTAMICINA 280MG 1 AMPOLLA IM DIARIA PH LAC 3 CHORROS CADA LAVADO.', 'especialidad_id' => 1733, 'signos_vitales' => 'Peso: 61 Talla: 138 Presion: 120/80 Temperatura: 35'
             ]);
        DB::table('citas')->insert([
            'id'=> 33614,'paciente_id' => 11700, 'medico_id' => 3, 'fecha' => '2019-06-15', 'sintomas' => '', 'diagnostico' => 'INSUFICIENCIA VENOSA PERIFERICA', 'tratamiento' => 'DOLONEUROBION  DAFLON  NEUROBION KUFER Q ECV  DIGESTOPAN FORTE  JUVENTA', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 84 Talla: 159 Presion: 150/90 Temperatura: 37' 
             ]);
        DB::table('citas')->insert([
            'id'=> 33652,'paciente_id' => 6552, 'medico_id' => 3, 'fecha' => '2019-06-18', 'sintomas' => 'HEMORROIDE', 'diagnostico' => 'HEMORROIDES', 'tratamiento' => 'DIPEMINA  FAKTU  CONTRALMOR  ROWATINEX  HCT  DIGESTOPAN FORTE  HEPALIVE ADVANCE', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 69 Talla: 143 Presion: 120/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 33746,'paciente_id' => 23976, 'medico_id' => 40, 'fecha' => '2019-06-24', 'sintomas' => 'control ginecologico.', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'Vagil C  1 aplicaciÃ³n cada noche.', 'especialidad_id' => 1733, 'signos_vitales' => 'Peso: 61 Talla: 139 Presion: 120/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 33769,'paciente_id' => 6552, 'medico_id' => 3, 'fecha' => '2019-06-25', 'sintomas' => 'DOLOR EN PIERNA DERECHA', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'VALERPAN DOLONEUROBION  NEUROBION  DIPEMINA  HEPALIVE ADVANCE', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 68 Talla: 144 Presion: 100/80 Temperatura: 37'
             ]);
        DB::table('citas')->insert([
            'id'=> 34200,'paciente_id' => 28653, 'medico_id' => 3, 'fecha' => '2019-07-22', 'sintomas' => 'DOLOR AL TORAX  FLEMA  RINORREA  TOS  CALAMBRES', 'diagnostico' => 'CONGESTION BRONQUIAL', 'tratamiento' => 'TRIFAMOX  FLUIMUCIL  VALERPAN  ALLEGRA  PIASCLEDINE  DIPEMINA  SINGRIPAL  KUFER Q ECV', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 57 Talla: 149 Presion: 120/80 '
             ]);
        DB::table('citas')->insert([
            'id'=> 34495,'paciente_id' => 5277, 'medico_id' => 43, 'fecha' => '2019-08-10', 'sintomas' => 'Paciente de 52 años Menopausia hace 1 1/2AGO G8 A2 P5 C1 A cude a consulta por presentar dolor a nivel de hipogastrio de moderada intensidad hyace +- 1 mes de evolucion + disuria + polaquiuria + tenesmo vesical con el mismo tiempo de evolucion. Al examen fisico abdomen blando depresible doloroso a nivel de fosa iliaca izquierda e hipogastrio de moderada intensidad, puñopercusion -. Al tacto vaginal presencia de prolapso vesical grado 1. No presencia de secreciones. Paciente refiere dismunucion del libido sexual, sofocos , bochornos, insomnio hace +- 2 años de evolucion', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => ' ', 'especialidad_id' => 1733, 'signos_vitales' => 'Peso: 57 Talla: 150 Presion: 130/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 34695,'paciente_id' => 5277, 'medico_id' => 39, 'fecha' => '2019-08-24', 'sintomas' => '', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => '', 'especialidad_id' => 1463, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 34790,'paciente_id' => 5277, 'medico_id' => 43, 'fecha' => '2019-08-31', 'sintomas' => 'Paciente de 52 años acude a consulta para resultados de examenes. LABORATORIO.hEMATIES 4.830.00 , HEMATOCRITO 44, HEMOGLOBINA 14, GLUCOSA 144, COLESTEROL 280, TRIGLICERIDOS 235, UROANALISIS PIOCITOS 8XC, FILAMENTOS MUCOSOS, CELULAS ABUNDANTES. Ecografia pelvica, UTERO NORMAL  NO MASAS, NO QUISTES NI MIOMAS, OVARIO DERECHO E IZQUIERDO NORMAL. HIGADO ESTEATOSIS HEPATICA GRADO 2, COLON METEORISMO, RIÑON DERECHO 8.43X4.31, IMAGEN ECOREFRINGENTE PROCEDE DE CALCULO 0.78X0.70. Al momento de la consulta paciente refiere la persisten de bochornos, sofocos, insomnio+ presencia de secrecion amarilla no fetida + prurito vulvar.', 'diagnostico' => 'SINDROME MENOPAUSICO', 'tratamiento' => 'Etron ovulos cad dia x 7 dia Gentamicina 160 mg IM cada dia x 5 dia Trigentax crema aplicvar en zona vulvar PH LAC jabon intimo aseo diario cda 12 hrs Menopause cada dia x 30 dias y continuar x 3 mess TRH Cyscontrol sobres cada dia x 30 dias E pluss cada dia x 90 dias Seres colageno cada dia de manera permanente', 'especialidad_id' => 1733, 'signos_vitales' => 'Peso: 57 Talla: 150 Presion: 120/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 35293,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2019-10-05', 'sintomas' => 'TOS', 'diagnostico' => 'ASMA BRONQUIAL', 'tratamiento' => 'DEXAMETASONA  ALERCET  SERETIDE 25/125', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 66 Talla: 148 Presion: 130/84 Temperatura: 37'
             ]);
        DB::table('citas')->insert([
            'id'=> 35371,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2019-10-12', 'sintomas' => 'ENF. CONTROLADA', 'diagnostico' => 'ASMA BRONQUIAL', 'tratamiento' => 'SINGULAIR  SERETIDE 25/125', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 67 Talla: 146 Presion: 140/83 Temperatura: 37'
             ]);
        DB::table('citas')->insert([
            'id'=> 35480,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2019-10-21', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1453, 'signos_vitales' => 'Peso: 47 Talla: 144 Presion: 110/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 35500,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2019-10-22', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1454, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 35669,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2019-11-05', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1454, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 35820,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2019-11-13', 'sintomas' => 'PCTE CON DISNEA LEVE', 'diagnostico' => 'SINDROME ANSIOSO', 'tratamiento' => 'DEGRALER  SINGRIPAL  DEXAMETASONA  SINGULAR', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 67 Talla: 147 Presion: 130/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 35900,'paciente_id' => 5651, 'medico_id' => 45, 'fecha' => '2019-11-19', 'sintomas' => 'CONTROL GIENCOLOGIO Y DOLOR PELVICO MAS 2 SEMANAS SE REALIZA EXAMEN DE PAPANICOLAU', 'diagnostico' => 'INFLAMACION PELVICA', 'tratamiento' => 'CEFALECXINA VIA ORAL 15 1 CD 8HS  IBUPROFENO 600MG VIA ORAL   FANGA PLUSS 6 1 CD NOCHE LAVAR CON POVIDYN 2 VECES AL DIA  Y TOMAR REDOXON', 'especialidad_id' => 1733, 'signos_vitales' => 'Peso: 49 Talla: 150 Presion: 100/60 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 35999,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2019-11-25', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1453, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 36211,'paciente_id' => 24299, 'medico_id' => 3, 'fecha' => '2019-12-07', 'sintomas' => 'CEFALEA  MALESTAR GENERAL', 'diagnostico' => 'RINITIS', 'tratamiento' => 'ALERCET  SINGRIPAL  ANALGAN  DOLOCURAFLEX  DIPEMINA  KUFER Q ECV', 'especialidad_id' => 1477, 'signos_vitales' => 'Peso: 66 Talla: 151 Presion: 120/80 Temperatura: 35'
             ]);
        DB::table('citas')->insert([
            'id'=> 36277,'paciente_id' => 11700, 'medico_id' => 3, 'fecha' => '2019-12-11', 'sintomas' => 'ANGUSTIA  EPIGASTRALGIA', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'ESOMAX  DIGERIL FORTE  COLAX  VALERIANA', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 87 Talla: 161 Presion: 110/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 36302,'paciente_id' => 24299, 'medico_id' => 39, 'fecha' => '2019-12-13', 'sintomas' => '', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => '', 'especialidad_id' => 1597, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 36360,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2019-12-17', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1528, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 36632,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2020-01-07', 'sintomas' => 'POLIARTRALGIA', 'diagnostico' => 'ARTRITIS', 'tratamiento' => 'ADOLAN  FORTE +COMPLEJO  B INFLACORT RETARD', 'especialidad_id' => 1454, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 36674,'paciente_id' => 23976, 'medico_id' => 3, 'fecha' => '2020-01-09', 'sintomas' => '', 'diagnostico' => 'URTICARIA', 'tratamiento' => 'BILAXTEN  ATARAX  DEXAMETASONA  KUFER Q ECV', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 59 Talla: 137 Presion: 140/80 Temperatura: 35'
             ]);
        DB::table('citas')->insert([
            'id'=> 36755,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2020-01-14', 'sintomas' => 'PCTE CON ABCESO ASMATICO', 'diagnostico' => 'ASMA BRONQUIAL', 'tratamiento' => 'DEXAMETASONA  SINGULAIR  DEGRALER  AEROFLUX', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 66 Talla: 146 Presion: 110/80 Temperatura: 37'
             ]);
        DB::table('citas')->insert([
            'id'=> 36900,'paciente_id' => 23976, 'medico_id' => 3, 'fecha' => '2020-01-23', 'sintomas' => '', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'COLMIBE 20/10  VALCOTE ER KUFER Q ECV', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 60 Talla: 139 Presion: 120/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 37038,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2020-02-03', 'sintomas' => 'POLIARTRALGIA', 'diagnostico' => 'ARTRITIS', 'tratamiento' => 'SYNVISC ONE PALEXIS 50 MG BIOMETRIX', 'especialidad_id' => 1453, 'signos_vitales' => 'Peso: 48 Talla: 147 Presion: 110/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 37164,'paciente_id' => 23976, 'medico_id' => 39, 'fecha' => '2020-02-10', 'sintomas' => '', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => '', 'especialidad_id' => 1435, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 37168,'paciente_id' => 23976, 'medico_id' => 3, 'fecha' => '2020-02-10', 'sintomas' => 'LEVE PRURITO GENERAL  DOLOR MODERADO LUMBAR IZQ. LEVE ESTREÑIMIENTO', 'diagnostico' => 'INFILTRACION GRASA DEL HIGADO', 'tratamiento' => 'KUFER Q ECV  VIT.C  COLMIBE 20/10  L-CARNITINA POLVO  ROWATINEX  HCT', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 60 Talla: 138 Presion: 120/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 37603,'paciente_id' => 23976, 'medico_id' => 3, 'fecha' => '2020-03-09', 'sintomas' => 'CEFALEA LEVE DE 24 HORAS  HIPERTERMIA EN LABIOS Y PIES  CAIDA DE CABELLO  PIEL RESECA', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'COLMIBE 20/10  L-CARNILINE  KUFER Q ECV  ROWATINEX  TOCOVIT E  BIO T ZINC  MEGA', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 59 Talla: 138 Presion: 110/60 Temperatura: 35'
             ]);
        DB::table('citas')->insert([
            'id'=> 37622,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2020-03-10', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1453, 'signos_vitales' => 'Peso: 50 Talla: 145 Presion: 100/80 Temperatura: 36'
             ]);
        DB::table('citas')->insert([
            'id'=> 37642,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2020-03-10', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1454, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 37645,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2020-03-11', 'sintomas' => 'TOS CEFALEA  RINORREA', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'DEGRALER  SINGULAIR  SERETIDE 25/125  MEGADOSIS  FLUIMUCIL', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 64 Talla: 148 Presion: 130/60 Temperatura: 37'
             ]);
        DB::table('citas')->insert([
            'id'=> 37720,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2020-03-14', 'sintomas' => '', 'diagnostico' => 'ASMA BRONQUIAL', 'tratamiento' => 'ANALGAN  REDOXON', 'especialidad_id' => 1458, 'signos_vitales' => 'Peso: 64 Talla: 147 Presion: 120/80 Temperatura: 38'
             ]);
        DB::table('citas')->insert([
            'id'=> 37709,'paciente_id' => 24299, 'medico_id' => 45, 'fecha' => '2020-03-14', 'sintomas' => 'CONTROL GIENECOLOGICO   PACIENTE INDICA QUE TIENE DOLOR AL ORIANA    MAS 5 DIAS ACOMPAÑADO DE INFLAMACION EN EL VIENTRE    A SU  EVOLCUION', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => 'CONTROL GNECOLOGICO ,  EXAME REALIZAR FISICO QUIMICO SEDIMENTO DE ORIAN  Y CULTIVO DE ORIANA  SE ENVIA TOMAR LIQUIDO ,   VITAMINA C      VAGIVIT OVULOS  7 CD NOCHE        SULTAMICINA 375 MG VIA ORAL CD 12 HS  PH LAC INTIMO LAVAR 3 VECES AL DIA', 'especialidad_id' => 1736, 'signos_vitales' => 'Peso: 65 Talla: 151 Presion: 110/80 Temperatura: 35'
             ]);
        DB::table('citas')->insert([
            'id'=> 37732,'paciente_id' => 24299, 'medico_id' => 39, 'fecha' => '2020-03-14', 'sintomas' => '', 'diagnostico' => 'CONTROL GINECOLOGICO', 'tratamiento' => '', 'especialidad_id' => 1633, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 38121,'paciente_id' => 24299, 'medico_id' => 39, 'fecha' => '2020-06-26', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1597, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 38122,'paciente_id' => 24299, 'medico_id' => 3, 'fecha' => '2020-06-26', 'sintomas' => 'PA: 110/80  OX: 97  P: 63 KG', 'diagnostico' => 'DIABETES MELLITUS ', 'tratamiento' => 'BUCOGALLE  FLUIMUCIL  DEGRALER  COLAX  BIOFIT  KUFER Q ECV', 'especialidad_id' => 1477, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 38159,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2020-06-30', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1453, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 38171,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2020-06-30', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1454, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 38489,'paciente_id' => 7005, 'medico_id' => 3, 'fecha' => '2020-07-23', 'sintomas' => 'DIFICULTAD RESPIRATORIA  SIBILANCIAS', 'diagnostico' => 'ASMA BRONQUIAL', 'tratamiento' => 'DEXAMETASONA  SINGULAIR 10 MG  SERETIDE 25/250', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 66 Talla: 147 Presion: 140/80 Temperatura: 37'
             ]);
        DB::table('citas')->insert([
            'id'=> 38900,'paciente_id' => 32072, 'medico_id' => 10, 'fecha' => '2020-09-01', 'sintomas' => 'OTALGIA CEFALEA  SORDERA', 'diagnostico' => 'OTITIS MEDIA', 'tratamiento' => 'FLURITOX  ANALGAN  CEFUROXIMA', 'especialidad_id' => 1421, 'signos_vitales' => 'Peso: 48 Talla: 146 Presion: 110/80 Temperatura: 37'
             ]);
        DB::table('citas')->insert([
            'id'=> 38901,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2020-09-01', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1453, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 38913,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2020-09-01', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1454, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 39003,'paciente_id' => 28653, 'medico_id' => 3, 'fecha' => '2020-09-08', 'sintomas' => 'PA: 160/80  CEFALEA TEMPORAL DER.  MAREO  NAUSEA  VOMITO FLATULENCIA  DOLOR EN HD', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'ALEVIAN DUO  ACI TIP  MIGRADORIXINA ANAUTIN  DIGESTA  DOLGENAL  BIOTIPLUS  KUFER Q ECV  DAFLON', 'especialidad_id' => 1439, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 39012,'paciente_id' => 28653, 'medico_id' => 39, 'fecha' => '2020-09-08', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1435, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 39056,'paciente_id' => 28653, 'medico_id' => 1, 'fecha' => '2020-09-11', 'sintomas' => 'PACIENTE HTA-DM2 TOMA LOSARTAN 100MG', 'diagnostico' => 'VALORACION CARDIOLOGICA', 'tratamiento' => 'MAPA', 'especialidad_id' => 1428, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 39159,'paciente_id' => 5651, 'medico_id' => 3, 'fecha' => '2020-09-22', 'sintomas' => 'PCTE CON DOLOR EN FI , ESPORADICO DE UNA SEMANA DE EVOLUCION', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'DOLGENAL  SPASMOMEN  ZALDIAR', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 48 Talla: 149 Presion: 100/80 Temperatura: 37'
             ]);
        DB::table('citas')->insert([
            'id'=> 39160,'paciente_id' => 5651, 'medico_id' => 39, 'fecha' => '2020-09-22', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1435, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 39168,'paciente_id' => 5651, 'medico_id' => 4, 'fecha' => '2020-09-22', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1114, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 39264,'paciente_id' => 32072, 'medico_id' => 10, 'fecha' => '2020-09-29', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1421, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 39265,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2020-09-29', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1453, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 39346,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2020-10-06', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1454, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 39461,'paciente_id' => 24299, 'medico_id' => 4, 'fecha' => '2020-10-17', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1460, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 39827,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2020-11-24', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1453, 'signos_vitales' => 'Peso: 51 Talla: 145 Presion: 100/80 Temperatura: 34'
             ]);
        DB::table('citas')->insert([
            'id'=> 39836,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2020-11-24', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1454, 'signos_vitales' => '   '
             ]);
        DB::table('citas')->insert([
            'id'=> 39980,'paciente_id' => 32072, 'medico_id' => 9, 'fecha' => '2020-12-08', 'sintomas' => '', 'diagnostico' => 'NULL', 'tratamiento' => '', 'especialidad_id' => 1453, 'signos_vitales' => 'Peso: 50 Talla: 145 Presion: 90/60 Temperatura: 34'
             ]);
        DB::table('citas')->insert([
            'id'=> 40462,'paciente_id' => 28653, 'medico_id' => 3, 'fecha' => '2021-02-02', 'sintomas' => 'CEFALEA  MAREO  DOLOR EN HD  ASTENIA', 'diagnostico' => 'DIAGNOSTICO EN INVESTIGACION', 'tratamiento' => 'BETASERC  ANALGAN  KUFER Q ECV  DOLONEUROBION  DAFLON', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 55 Talla: 148 Presion: 120/80 Temperatura: 35'
             ]);
        DB::table('citas')->insert([
            'id'=> 40481,'paciente_id' => 28653, 'medico_id' => 3, 'fecha' => '2021-02-05', 'sintomas' => '', 'diagnostico' => 'DIABETES MELLITUS ', 'tratamiento' => 'METFORMINA 500  BID TOREZA 20  COLAX  KUFER Q ECV', 'especialidad_id' => 1439, 'signos_vitales' => 'Peso: 56 Talla: 149 Presion: 130/60 Temperatura: 34'
        ]);    
        #endregion
    }
}
