  @if(\Auth::user()->role_id == 4)
 <li class="dropdown">

  <a href="#" class="dropdown-toggle">
    <i class="fa fa-inbox"></i>
    <span class="hidden-xs">Archivos</span>
  </a>
  <ul class="dropdown-menu">
    <li>
      <a href="{{route('personal.index')}}"><i class="fa fa-users"></i> Personal</a>
    </li>
    <li>
      <a href="{{route('centros.index')}}"><i class="fa fa-hospital-o"></i> Centros medicos</a>
    </li>
    <li>
      <a href="{{route('profesionales.index')}}"><i class="fa fa-plus-square"></i> Prof. de apoyo</a>
    </li>
    <li>
      <a href="{{route('laboratorios.index')}}"><i class="fa fa-circle-o"></i> Laboratorios</a>
    </li>
    <li>
      <a href="{{route('analisis.index')}}"><i class="fa fa-renren"></i> Analisis de laboratorios</a>
    </li>
    <li>
      <a href="{{route('servicios.index')}}"><i class="fa fa-dropbox"></i> Servicios</a>
    </li>
    <li>
      <a href="{{route('paquetes.index')}}"><i class="fa fa-dropbox"></i> Paquetes de servicios</a>
    </li>
    <li>
      <a href="{{route('pacientes.index')}}"><i class="fa fa-wheelchair"></i> Pacientes</a>
    </li>    
  </ul>
</li>

<li class="dropdown">
  <a href="#" class="dropdown-toggle">
    <i class="fa fa-refresh"></i>
    <span class="hidden-xs">Existencias</span>
  </a>
  <ul class="dropdown-menu">
   <li>
      <a href="#" class="dropdown-toggle"><i class="fa fa-tasks"></i> Productos</a>
        <ul class="dropdown-menu">

          <li>
            <a href="{{route('productos.index')}}"><i class="fa fa-list-alt"></i> Almacen Central</a>
          </li>


          <li>
            <a href="{{route('productos.index2')}}"><i class="fa fa-list-alt"></i> Almacen Local</a>
          </li>


        </ul>      
    </li>
    <li>
      <a href="#" class="dropdown-toggle"><i class="fa fa-reply"></i> Requerimientos</a>
        <ul class="dropdown-menu">

          <li>
            <a href="{{route('requerimientos.index')}}"><i class="fa fa-plus-square-o"></i> Enviados</a>
          </li>


          <li>
            <a href="{{route('requerimientos.index2')}}"><i class="fa fa-plus-square-o"></i> Recibidos</a>
          </li>


        </ul>      
    </li>

    <li>
      <a href="{{route('historico')}}"><i class="fa fa-list-alt"></i> Historico de transferencias</a>
    </li>

  
    <li>
      <a href="#" class="dropdown-toggle"><i class="fa fa-share"></i> Ingreso de productos</a>
        <ul class="dropdown-menu">
          <li>
            <a href="{{route('productos.in')}}"><i class="fa fa-plus-square-o"></i> Ingresos</a>
          </li>
        </ul>      
    </li>


    <li>
      <a href="#" class="dropdown-toggle"><i class="fa fa-reply"></i> Salida de productos</a>
        <ul class="dropdown-menu">
          <li>
            <a href="{{route('productos.out')}}"><i class="fa fa-plus-square-o"></i> Ventas</a>
          </li>

          <li>
            <!--{{route('productos.trans')}}-->
            <a href="{{route('productos.trans')}}"><i class="fa fa-refresh"></i> Movimientos</a>
          </li>



        </ul>      
    </li>

  </ul>
</li>

  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-unsorted"></i>
      <span class="hidden-xs">Movimientos</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('atenciones.index')}}"><i class="fa fa-plus-circle"></i> Ingreso de Atenciones</a>
      </li>
      <li>
        <a href="{{route('gastos.index')}}"><i class="fa fa-random"></i> Relación de Gastos</a>
      </li>
      <li>
        <a href="{{route('labporpagar.index')}}"><i class="fa fa-dollar"></i> Laboratorios por Pagar</a>
      </li>
      <li>
        <a href="{{route('ingresos.index')}}"><i class="fa fa-money"></i> Otros Ingresos</a>
      </li>
      <li>
        <a href="{{route('cuentasporcobrar.index')}}"><i class="fa fa-list-alt"></i> Cuentas por Cobrar</a>
      </li>
      <li>
        <a href="{{route('comporpagar.index')}}"><i class="fa fa-list-alt"></i> Comis. Pers y Prof.</a>
      </li>
    
      <li>
        <a href="{{route('compagadas.index')}}"><i class="fa fa-list-alt"></i> Comisiones Pagadas</a>
      </li>

    </ul>
  </li>

  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-unsorted"></i>
      <span class="hidden-xs">Consultas</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('consultas.create')}}"><i class="fa fa-plus-circle"></i> Nueva Consulta</a>
      </li>
      <li>
        <a href="{{route('consultas.index')}}"><i class="fa fa-plus-circle"></i> Mostrar Consultas</a>
      </li>  
       <li>
        <a href="{{route('proximacita.index')}}"><i class="fa fa-plus-circle"></i> Pròximas Citas</a>
      </li>              
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-unsorted"></i>
      <span class="hidden-xs">Programaciones</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('service.create')}}"><i class="fa fa-plus-circle"></i> Programar Servicio</a>
      </li> 
      <li>
        <a href="{{route('service.index')}}"><i class="fa fa-plus-circle"></i> Mostrar Programaciòn</a>
      </li>                  
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-copy"></i>
      <span class="hidden-xs">Resultados</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('resultados.index')}}"><i class="fa fa-list-alt"></i> Redactar Resultados</a>
      </li>
      <li>
        <a href="{{route('resultadosguardados.index')}}"><i class="fa fa-search"></i> Consultar Resultados</a>
      </li>
      <li>
        <a href="{{route('resultados.informe-index')}}"><i class="fa fa-list-alt"></i> Lista Modelos de Informe</a>
      </li>
      <li>
        <a href="{{route('resultados.informe')}}"><i class="fa fa-plus-circle"></i> Crear Modelo de Informe</a>
      </li>
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-copy"></i>
      <span class="hidden-xs"> Control Prenatal</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('prenatal.create')}}"><i class="fa fa-list-alt"></i> Registrar Control</a>
      </li>
      <li>
        <a href="{{route('prenatal.index')}}"><i class="fa fa-search"></i> Buscar Control</a>
      </li>
    </ul>
  </li>

    <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-truck"></i>
      <span class="hidden-xs">Visitadores</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('visitas.index')}}"><i class="fa fa-truck"></i> Registro de Visitas</a>
      </li>
      <li>
        <a href="{{route('comporentregar.index')}}"><i class="fa fa-square-o"></i> Comisiones Por Entregar</a>
      </li>
       <li>
        <a href="{{route('comentregadas.index')}}"><i class="fa fa-check-square-o"></i> Comisiones Entregadas</a>
      </li>
    </ul>
  </li>

  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-copy"></i>
      <span class="hidden-xs">Reportes</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="reporte-solicitar_diario"><i class="fa fa-file-o"></i> Atenciòn Diaria Consolidado</a>
      </li>
       <li>
        <a href="reporte-solicitar_consolidado"><i class="fa fa-file-o"></i> Atenciòn Diaria Detallado</a>
      </li>
      <li>
        <a href="{{route('generalatenciones.indexa')}}"><i class="fa fa-file-o"></i> General Atenciones</a>
      </li>
       <li>
        <a href="{{route('generalegresos.indexe')}}"><i class="fa fa-file-o"></i> General Egresos</a>
      </li>
       <li>
        <a href="{{route('comollego.index')}}"><i class="fa fa-file-o"></i> Còmo llego el Paciente?</a>
      </li>
    </ul>
  </li>

  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-cog"></i>
      <span class="hidden-xs">Administración</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('users.index')}}"><i class="fa fa-users"></i> Usuarios</a>
      </li>
      <li>
        <a href="{{route('role.index')}}"><i class="fa fa-user-md"></i> Roles</a>
      </li>     
      <li>
        <a href="{{route('sedes.index')}}"><i class="fa fa-hospital-o"></i> Empresas</a>
      </li>      
    </ul>
  </li>
  @elseif(\Auth::user()->role_id == 5)
	   <a href="#" class="dropdown-toggle">
    <i class="fa fa-inbox"></i>
    <span class="hidden-xs">Archivos</span>
  </a>
  <ul class="dropdown-menu">
    <li>
      <a href="{{route('personal.index')}}"><i class="fa fa-users"></i> Personal</a>
    </li>
    <li>
      <a href="{{route('centros.index')}}"><i class="fa fa-hospital-o"></i> Centros medicos</a>
    </li>
    <li>
      <a href="{{route('profesionales.index')}}"><i class="fa fa-plus-square"></i> Prof. de apoyo</a>
    </li>
    <li>
      <a href="{{route('laboratorios.index')}}"><i class="fa fa-circle-o"></i> Laboratorios</a>
    </li>
    <li>
      <a href="{{route('analisis.index')}}"><i class="fa fa-renren"></i> Analisis de laboratorios</a>
    </li>
    <li>
      <a href="{{route('servicios.index')}}"><i class="fa fa-dropbox"></i> Servicios</a>
    </li>
    <li>
      <a href="{{route('paquetes.index')}}"><i class="fa fa-dropbox"></i> Paquetes de servicios</a>
    </li>
    <li>
      <a href="{{route('pacientes.index')}}"><i class="fa fa-wheelchair"></i> Pacientes</a>
    </li>    
  </ul>
</li>

<li class="dropdown">
  <a href="#" class="dropdown-toggle">
    <i class="fa fa-refresh"></i>
    <span class="hidden-xs">Existencias</span>
  </a>
  <ul class="dropdown-menu">
   <li>
      <a href="#" class="dropdown-toggle"><i class="fa fa-tasks"></i> Productos</a>
        <ul class="dropdown-menu">

          <li>
            <a href="{{route('productos.index')}}"><i class="fa fa-list-alt"></i> Almacen Central</a>
          </li>


          <li>
            <a href="{{route('productos.index2')}}"><i class="fa fa-list-alt"></i> Almacen Local</a>
          </li>


        </ul>      
    </li>
    <li>
      <a href="#" class="dropdown-toggle"><i class="fa fa-reply"></i> Requerimientos</a>
        <ul class="dropdown-menu">

          <li>
            <a href="{{route('requerimientos.index')}}"><i class="fa fa-plus-square-o"></i> Enviados</a>
          </li>


          <li>
            <a href="{{route('requerimientos.index2')}}"><i class="fa fa-plus-square-o"></i> Recibidos</a>
          </li>


        </ul>      
    </li>

    <li>
      <a href="{{route('historico')}}"><i class="fa fa-list-alt"></i> Historico de transferencias</a>
    </li>

  
    <li>
      <a href="#" class="dropdown-toggle"><i class="fa fa-share"></i> Ingreso de productos</a>
        <ul class="dropdown-menu">
          <li>
            <a href="{{route('productos.in')}}"><i class="fa fa-plus-square-o"></i> Ingresos</a>
          </li>
        </ul>      
    </li>


    <li>
      <a href="#" class="dropdown-toggle"><i class="fa fa-reply"></i> Salida de productos</a>
        <ul class="dropdown-menu">
          <li>
            <a href="{{route('productos.out')}}"><i class="fa fa-plus-square-o"></i> Ventas</a>
          </li>

          <li>
            <!--{{route('productos.trans')}}-->
            <a href="{{route('productos.trans')}}"><i class="fa fa-refresh"></i> Movimientos</a>
          </li>



        </ul>      
    </li>

  </ul>
</li>

  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-unsorted"></i>
      <span class="hidden-xs">Movimientos</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('atenciones.index')}}"><i class="fa fa-plus-circle"></i> Ingreso de Atenciones</a>
      </li>
      <li>
        <a href="{{route('gastos.index')}}"><i class="fa fa-random"></i> Relación de Gastos</a>
      </li>
      <li>
        <a href="{{route('labporpagar.index')}}"><i class="fa fa-dollar"></i> Laboratorios por Pagar</a>
      </li>
      <li>
        <a href="{{route('ingresos.index')}}"><i class="fa fa-money"></i> Otros Ingresos</a>
      </li>
      <li>
        <a href="{{route('cuentasporcobrar.index')}}"><i class="fa fa-list-alt"></i> Cuentas por Cobrar</a>
      </li>
      <li>
        <a href="{{route('comporpagar.index')}}"><i class="fa fa-list-alt"></i> Comis. Pers y Prof.</a>
      </li>
    
      <li>
        <a href="{{route('compagadas.index')}}"><i class="fa fa-list-alt"></i> Comisiones Pagadas</a>
      </li>

    </ul>
  </li>

  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-unsorted"></i>
      <span class="hidden-xs">Consultas</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('consultas.create')}}"><i class="fa fa-plus-circle"></i> Nueva Consulta</a>
      </li>
      <li>
        <a href="{{route('consultas.index')}}"><i class="fa fa-plus-circle"></i> Mostrar Consultas</a>
      </li>  
       <li>
        <a href="{{route('proximacita.index')}}"><i class="fa fa-plus-circle"></i> Pròximas Citas</a>
      </li>              
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-unsorted"></i>
      <span class="hidden-xs">Programaciones</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('service.create')}}"><i class="fa fa-plus-circle"></i> Programar Servicio</a>
      </li> 
      <li>
        <a href="{{route('service.index')}}"><i class="fa fa-plus-circle"></i> Mostrar Programaciòn</a>
      </li>                  
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-copy"></i>
      <span class="hidden-xs">Resultados</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('resultados.index')}}"><i class="fa fa-list-alt"></i> Redactar Resultados</a>
      </li>
      <li>
        <a href="{{route('resultadosguardados.index')}}"><i class="fa fa-search"></i> Consultar Resultados</a>
      </li>
      <li>
        <a href="{{route('resultados.informe-index')}}"><i class="fa fa-list-alt"></i> Lista Modelos de Informe</a>
      </li>
      <li>
        <a href="{{route('resultados.informe')}}"><i class="fa fa-plus-circle"></i> Crear Modelo de Informe</a>
      </li>
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-copy"></i>
      <span class="hidden-xs"> Control Prenatal</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('prenatal.create')}}"><i class="fa fa-list-alt"></i> Registrar Control</a>
      </li>
      <li>
        <a href="{{route('prenatal.index')}}"><i class="fa fa-search"></i> Buscar Control</a>
      </li>
    </ul>
  </li>

    <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-truck"></i>
      <span class="hidden-xs">Visitadores</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('visitas.index')}}"><i class="fa fa-truck"></i> Registro de Visitas</a>
      </li>
      <li>
        <a href="{{route('comporentregar.index')}}"><i class="fa fa-square-o"></i> Comisiones Por Entregar</a>
      </li>
       <li>
        <a href="{{route('comentregadas.index')}}"><i class="fa fa-check-square-o"></i> Comisiones Entregadas</a>
      </li>
    </ul>
  </li>

  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-copy"></i>
      <span class="hidden-xs">Reportes</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="reporte-solicitar_diario"><i class="fa fa-file-o"></i> Atenciòn Diaria Consolidado</a>
      </li>
       <li>
        <a href="reporte-solicitar_consolidado"><i class="fa fa-file-o"></i> Atenciòn Diaria Detallado</a>
      </li>
      <li>
        <a href="{{route('generalatenciones.indexa')}}"><i class="fa fa-file-o"></i> General Atenciones</a>
      </li>
       <li>
        <a href="{{route('generalegresos.indexe')}}"><i class="fa fa-file-o"></i> General Egresos</a>
      </li>
       <li>
        <a href="{{route('comollego.index')}}"><i class="fa fa-file-o"></i> Còmo llego el Paciente?</a>
      </li>
    </ul>
  </li>

    @elseif(\Auth::user()->role_id == 6)
     <a href="#" class="dropdown-toggle">
    <i class="fa fa-inbox"></i>
    <span class="hidden-xs">Archivos</span>
  </a>
  <ul class="dropdown-menu">
    <li>
      <a href="{{route('personal.index')}}"><i class="fa fa-users"></i> Personal</a>
    </li>
    <li>
      <a href="{{route('centros.index')}}"><i class="fa fa-hospital-o"></i> Centros medicos</a>
    </li>
    <li>
      <a href="{{route('profesionales.index')}}"><i class="fa fa-plus-square"></i> Prof. de apoyo</a>
    </li>
    <li>
      <a href="{{route('laboratorios.index')}}"><i class="fa fa-circle-o"></i> Laboratorios</a>
    </li>
    <li>
      <a href="{{route('analisis.index')}}"><i class="fa fa-renren"></i> Analisis de laboratorios</a>
    </li>
    <li>
      <a href="{{route('servicios.index')}}"><i class="fa fa-dropbox"></i> Servicios</a>
    </li>
    <li>
      <a href="{{route('paquetes.index')}}"><i class="fa fa-dropbox"></i> Paquetes de servicios</a>
    </li>
    <li>
      <a href="{{route('pacientes.index')}}"><i class="fa fa-wheelchair"></i> Pacientes</a>
    </li>    
  </ul>
</li>

<li class="dropdown">
  <a href="#" class="dropdown-toggle">
    <i class="fa fa-refresh"></i>
    <span class="hidden-xs">Existencias</span>
  </a>
  <ul class="dropdown-menu">
   <li>
      <a href="#" class="dropdown-toggle"><i class="fa fa-tasks"></i> Productos</a>
        <ul class="dropdown-menu">

          <li>
            <a href="{{route('productos.index')}}"><i class="fa fa-list-alt"></i> Almacen Central</a>
          </li>


          <li>
            <a href="{{route('productos.index2')}}"><i class="fa fa-list-alt"></i> Almacen Local</a>
          </li>


        </ul>      
    </li>
    <li>
      <a href="#" class="dropdown-toggle"><i class="fa fa-reply"></i> Requerimientos</a>
        <ul class="dropdown-menu">

          <li>
            <a href="{{route('requerimientos.index')}}"><i class="fa fa-plus-square-o"></i> Enviados</a>
          </li>


          <li>
            <a href="{{route('requerimientos.index2')}}"><i class="fa fa-plus-square-o"></i> Recibidos</a>
          </li>


        </ul>      
    </li>

    <li>
      <a href="{{route('historico')}}"><i class="fa fa-list-alt"></i> Historico de transferencias</a>
    </li>

  
    <li>
      <a href="#" class="dropdown-toggle"><i class="fa fa-share"></i> Ingreso de productos</a>
        <ul class="dropdown-menu">
          <li>
            <a href="{{route('productos.in')}}"><i class="fa fa-plus-square-o"></i> Ingresos</a>
          </li>
        </ul>      
    </li>


    <li>
      <a href="#" class="dropdown-toggle"><i class="fa fa-reply"></i> Salida de productos</a>
        <ul class="dropdown-menu">
          <li>
            <a href="{{route('productos.out')}}"><i class="fa fa-plus-square-o"></i> Ventas</a>
          </li>

          <li>
            <!--{{route('productos.trans')}}-->
            <a href="{{route('productos.trans')}}"><i class="fa fa-refresh"></i> Movimientos</a>
          </li>



        </ul>      
    </li>

  </ul>
</li>

  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-unsorted"></i>
      <span class="hidden-xs">Movimientos</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('atenciones.index')}}"><i class="fa fa-plus-circle"></i> Ingreso de Atenciones</a>
      </li>
      <li>
        <a href="{{route('gastos.index')}}"><i class="fa fa-random"></i> Relación de Gastos</a>
      </li>
      <li>
        <a href="{{route('labporpagar.index')}}"><i class="fa fa-dollar"></i> Laboratorios por Pagar</a>
      </li>
      <li>
        <a href="{{route('ingresos.index')}}"><i class="fa fa-money"></i> Otros Ingresos</a>
      </li>
      <li>
        <a href="{{route('cuentasporcobrar.index')}}"><i class="fa fa-list-alt"></i> Cuentas por Cobrar</a>
      </li>
      <li>
        <a href="{{route('comporpagar.index')}}"><i class="fa fa-list-alt"></i> Comis. Pers y Prof.</a>
      </li>
    
      <li>
        <a href="{{route('compagadas.index')}}"><i class="fa fa-list-alt"></i> Comisiones Pagadas</a>
      </li>

    </ul>
  </li>

  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-unsorted"></i>
      <span class="hidden-xs">Consultas</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('consultas.create')}}"><i class="fa fa-plus-circle"></i> Nueva Consulta</a>
      </li>
      <li>
        <a href="{{route('consultas.index')}}"><i class="fa fa-plus-circle"></i> Mostrar Consultas</a>
      </li>  
       <li>
        <a href="{{route('proximacita.index')}}"><i class="fa fa-plus-circle"></i> Pròximas Citas</a>
      </li>              
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-unsorted"></i>
      <span class="hidden-xs">Programaciones</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('service.create')}}"><i class="fa fa-plus-circle"></i> Programar Servicio</a>
      </li> 
      <li>
        <a href="{{route('service.index')}}"><i class="fa fa-plus-circle"></i> Mostrar Programaciòn</a>
      </li>                  
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-copy"></i>
      <span class="hidden-xs">Resultados</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('resultados.index')}}"><i class="fa fa-list-alt"></i> Redactar Resultados</a>
      </li>
      <li>
        <a href="{{route('resultadosguardados.index')}}"><i class="fa fa-search"></i> Consultar Resultados</a>
      </li>
      <li>
        <a href="{{route('resultados.informe-index')}}"><i class="fa fa-list-alt"></i> Lista Modelos de Informe</a>
      </li>
      <li>
        <a href="{{route('resultados.informe')}}"><i class="fa fa-plus-circle"></i> Crear Modelo de Informe</a>
      </li>
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-copy"></i>
      <span class="hidden-xs"> Control Prenatal</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('prenatal.create')}}"><i class="fa fa-list-alt"></i> Registrar Control</a>
      </li>
      <li>
        <a href="{{route('prenatal.index')}}"><i class="fa fa-search"></i> Buscar Control</a>
      </li>
    </ul>
  </li>

    <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-truck"></i>
      <span class="hidden-xs">Visitadores</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('visitas.index')}}"><i class="fa fa-truck"></i> Registro de Visitas</a>
      </li>
      <li>
        <a href="{{route('comporentregar.index')}}"><i class="fa fa-square-o"></i> Comisiones Por Entregar</a>
      </li>
       <li>
        <a href="{{route('comentregadas.index')}}"><i class="fa fa-check-square-o"></i> Comisiones Entregadas</a>
      </li>
    </ul>
  </li>

  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-copy"></i>
      <span class="hidden-xs">Reportes</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="reporte-solicitar_diario"><i class="fa fa-file-o"></i> Atenciòn Diaria Consolidado</a>
      </li>
       <li>
        <a href="reporte-solicitar_consolidado"><i class="fa fa-file-o"></i> Atenciòn Diaria Detallado</a>
      </li>
      <li>
        <a href="{{route('generalatenciones.indexa')}}"><i class="fa fa-file-o"></i> General Atenciones</a>
      </li>
       <li>
        <a href="{{route('generalegresos.indexe')}}"><i class="fa fa-file-o"></i> General Egresos</a>
      </li>
       <li>
        <a href="{{route('comollego.index')}}"><i class="fa fa-file-o"></i> Còmo llego el Paciente?</a>
      </li>
    </ul>
  </li>

    @elseif(\Auth::user()->role_id == 7)
	  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-unsorted"></i>
      <span class="hidden-xs">Consultas</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('consultas.create')}}"><i class="fa fa-plus-circle"></i> Nueva Consulta</a>
      </li>
      <li>
        <a href="{{route('consultas.index')}}"><i class="fa fa-plus-circle"></i> Mostrar Consultas</a>
      </li>  
       <li>
        <a href="{{route('proximacita.index')}}"><i class="fa fa-plus-circle"></i> Pròximas Citas</a>
      </li>              
    </ul>
  </li>
	 <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-copy"></i>
      <span class="hidden-xs">Resultados</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('resultados.index')}}"><i class="fa fa-list-alt"></i> Redactar Resultados</a>
      </li>
      <li>
        <a href="{{route('resultadosguardados.index')}}"><i class="fa fa-search"></i> Consultar Resultados</a>
      </li>
      <li>
        <a href="{{route('resultados.informe-index')}}"><i class="fa fa-list-alt"></i> Lista Modelos de Informe</a>
      </li>
      <li>
        <a href="{{route('resultados.informe')}}"><i class="fa fa-plus-circle"></i> Crear Modelo de Informe</a>
      </li>
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-copy"></i>
      <span class="hidden-xs"> Control Prenatal</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{route('prenatal.create')}}"><i class="fa fa-list-alt"></i> Registrar Control</a>
      </li>
      <li>
        <a href="{{route('prenatal.index')}}"><i class="fa fa-search"></i> Buscar Control</a>
      </li>
    </ul>
  </li>
  
    @else
	<ul></ul>

    @endif


