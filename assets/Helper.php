<?php
abstract class Helper
{
    public static function verificarLogin(){
        if (!isset($_SESSION['usuario'])){
            header("Location: ?ctrl=CtrlPersona");
            exit();
        }
    }
    public static function getMenu($idM,$idP){

        switch ($idM) {
            case '1':   # 1
                switch ($idP) {
                    case 1:   #Administrador
                        $menu=self::getMenuTramiteAdmin();
                        break;
                    case 2:   #Docente
                        $menu=self::getMenuTramiteDocente();
                        break;
                    case 3:   #Estudiante
                        $menu=self::getMenuTramiteEstudiante();
                        break;
                    case 4:   #Administrativo
                        $menu=self::getMenuTramiteAdministrativo();
                        break;
                    
                    default:    #Visitante
                        $menu=self::getMenuTramiteVisitante();
                        break;
                }    
            
                break;
            case '2':   # Caja
                switch ($idP) {
                    case '1':   #Administrador
                        $menu=self::getMenuCajaAdmin();
                        break;
                    case '2':   #Docente
                        $menu=self::getMenuCajaDocente();
                        break;
                    case '3':   #Estudiante
                        $menu=self::getMenuCajaEstudiante();
                        break;
                    case '4':   #Administrativo
                        $menu=self::getMenuCajaAdministrativo();
                        break;
                    
                    default:    #Visitante
                        $menu=self::getMenuCajaVisitante();
                        break;
                }   
                break;
                case '3':   # Caja
                switch ($idP) {
                    case '1':   #Administrador
                        $menu=self::getMenuCajaAdmin();
                        break;
                    case '2':   #Docente
                        $menu=self::getMenuCajaDocente();
                        break;
                    case '3':   #Estudiante
                        $menu=self::getMenuCajaEstudiante();
                        break;
                    case '4':   #Administrativo
                        $menu=self::getMenuCajaAdministrativo();
                        break;
                    
                    default:    #Visitante
                        $menu=self::getMenuCajaVisitante();
                        break;
                }   
                break;
                case '4':   # Caja
                switch ($idP) {
                    case '1':   #Administrador
                        $menu=self::getMenuCajaAdmin();
                        break;
                    case '2':   #Docente
                        $menu=self::getMenuCajaDocente();
                        break;
                    case '3':   #Estudiante
                        $menu=self::getMenuCajaEstudiante();
                        break;
                    case '4':   #Administrativo
                        $menu=self::getMenuCajaAdministrativo();
                        break;
                    
                    default:    #Visitante
                        $menu=self::getMenuCajaVisitante();
                        break;
                }   
                break;
            default:
                # code...
                break;
        }
        
        return $menu;
    }
    private static function getMenuTramiteAdmin(){
        return [
            'CtrlCargo'=>'Cargos',
            'CtrlEstado'=>'Estados',
            'CtrlEstudiante'=>'Estudiante',
            'CtrlFichapermanencia'=>'Ficha de Permanencia',
            'CtrlTurno'=>'Turnos',
            'CtrlMotivosSalida'=>'Motivos de Salida',
            'CtrlRegistroAsistencia'=> 'Registro de asistencia'
 
        ]; 
    }
    private static function getMenuTramiteAdministrativo(){
        return [
            'CtrlCargo'=>'Cargos',
            'CtrlEstado'=>'Estados',
            'CtrlEstudiante'=>'Estudiante',
            'CtrlFichapermanencia'=>'Ficha de Permanencia',
            'CtrlTurno'=>'Turnos',
            'CtrlMotivosSalida'=>'Motivos de Salida',
            'CtrlRegistroAsistencia'=> 'Registro de asistencia'

        ]; 
    }
    private static function getMenuTramiteDocente(){
        return [
      
        ]; 
    }
    private static function getMenuTramiteEstudiante(){
        return [
            
        
           
        ]; 
    }
    private static function getMenuTramiteVisitante(){
        return [
        ]; 
    }
    private static function getMenuCajaAdmin(){
        return [
            'CtrlCargo'=>'Cargos',
            'CtrlEstado'=>'Estados',
            'CtrlFichapermanencia'=>'Ficha de Permanencia',
            'CtrlTurno'=>'Turnos',
            'CtrlMotivosSalida'=>'Motivos de Salida',
            'RegistroAsistencia'=> 'Registro de asistencia'
     
        ]; 
    }
    private static function getMenuCajaAdministrativo(){
        return [
            'CtrlCargo'=>'Cargos',
            'CtrlEstado'=>'Estados',
            'CtrlEstudiante'=>'Estudiante',
            'CtrlFichapermanencia'=>'Ficha de Permanencia',
            'CtrlTurno'=>'Turnos',
            'CtrlMotivosSalida'=>'Motivos de Salida',
            'RegistroAsistencia'=> 'Registro de asistencia'
       
        ]; 
    }
    private static function getMenuCajaDocente(){
        return [
     
           
        ]; 
    }
    private static function getMenuCajaEstudiante(){
        return [
            
       
           
        ]; 
    }
    private static function getMenuCajaVisitante(){
        return [
            'CtrlCargo'=>'Cargos',
            'CtrlEstado'=>'Estados',
            'CtrlFichapermanencia'=>'Ficha de Permanencia',
            'CtrlTurno'=>'Turnos',
            'CtrlMotivosSalida'=>'Motivos de Salida',   
            'RegistroAsistencia'=> 'Registro de asistencia'
        ]; 
    }

}