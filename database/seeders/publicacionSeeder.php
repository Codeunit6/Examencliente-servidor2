<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class publicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unidad=["Unidad 1","Unidad 1","Unidad 1","Unidad 1","Unidad 1","Unidad 1","Unidad 1", "Unidad 1", "Unidad 1"];
        $titulo = ["Reconocer los componentes del modelo Cliente/Servidor","Definir el concepto de Programa Maestro","Explicar los procesos y tareas del programa maestro","Describir los tipos de servidores","Reconocer las características de la arquitectura  Cliente/Servidor: servicios, recursos compartidos, protocolos asimétricos, independencia de la ubicación, compatibilidad de clientes y servidores, comunicación de mensajes, encapsulación de servicios, escalabilidad e integridad","Identificar las ventajas y desventajas de la arquitectura  Cliente/Servidor","Definir el concepto de cómputo en la nube","Definir los conceptos de Infrastructure as a Service (IAAS), Platform as a Service (PAAS), Software as a Service (SAAS)","Describir la arquitectura  Cliente/Servidor  con los modelos de cómputo en la nube IAAS, PAAS, SAAS"];
        $subtitulo =["Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor"];
        $autor =["Fernando Brayan Mejia Gomez","Eduardo Antonio Mendez Sandoval","Fernando Brayan Mejia Gomez","Eduardo Antonio Mendez Sandoval","Fernando Brayan Mejia Gomez","Eduardo Antonio Mendez Sandoval","Fernando Brayan Mejia Gomez","Eduardo Antonio Mendez Sandoval","Fernando Brayan Mejia Gomez"];
        $fecha=["01/03/2022","01/03/22","01/03/22","01/03/22","01/03/2022","01/03/22","01/03/22","01/03/22","01/03/22"];
        $contenido=["<article class='mb-4'>
        <div class='container px-4 px-lg-5'>
            <div class='row gx-4 gx-lg-5 justify-content-center'>
                <div class='col-md-10 col-lg-8 col-xl-7'>
                    <h2 class='section-heading'>Reconocer los componentes del modelo Cliente/Servidor.</h2>
                    <p class='text-justify'>La arquitectura cliente-servidor es un modelo de diseño de software en el que las tareas se reparten entre los proveedores de recursos o servicios, llamados servidores, y los demandantes, llamados clientes. Un cliente realiza peticiones a otro programa, el servidor, quien le da respuesta. Esta idea también se puede aplicar a programas que se ejecutan sobre una sola computadora, aunque es más ventajosa en un sistema operativo multiusuario distribuido a través de una red de computadoras.</p>
                    <p class='text-justify'>Algunos ejemplos de aplicaciones que usen el modelo cliente-servidor son el Correo electrónico, un Servidor de impresión y la World Wide Web. </p>
                    <img class='img-fluid' src='assets/img/unidad1-1.png' alt='...' style='width: 100%' />
                    <p class='text-justify'>En esta arquitectura la capacidad de proceso está repartida entre los clientes y los servidores, aunque son más importantes las ventajas de tipo organizativo debidas a la centralización de la gestión de la información y la separación de responsabilidades, lo que facilita y clarifica el diseño del sistema. </p>
                    <p class='text-justify'>La separación entre cliente y servidor es una separación de tipo lógico, donde el servidor no se ejecuta necesariamente sobre una sola máquina ni es necesariamente un solo programa. Los tipos específicos de servidores incluyen los servidores web, los servidores de archivo, los servidores del correo, etc. Mientras que sus propósitos varían de unos servicios a otros, la arquitectura básica seguirá siendo la misma. </p>
                    <p class='text-justify'>Una disposición muy común son los sistemas multicapa en los que el servidor se descompone en diferentes programas que pueden ser ejecutados por diferentes computadoras aumentando así el grado de distribución del sistema. 
    La red cliente-servidor es una red de comunicaciones en la cual los clientes están conectados a un servidor, en el que se centralizan los diversos recursos y aplicaciones con que se cuenta; y que los pone a disposición de los clientes cada vez que estos son solicitados. Esto significa que todas las gestiones que se realizan se concentran en el servidor, de manera que en él se disponen los requerimientos provenientes de los clientes que tienen prioridad, los archivos que son de uso público y los que son de uso restringido, los archivos que son de sólo lectura y los que, por el contrario, pueden ser modificados, etc. Este tipo de red puede utilizarse conjuntamente en caso de que se esté utilizando en una red mixta. 
    </p>
                    <div class='d-flex justify-content-end'><a class='btn btn-primary text-uppercase' href=\"unidad1-2\">Siguiente tema →</a></div>
                </div>
            </div>
        </div>
    </article>","<article class='mb-4'>
    <div class='container px-4 px-lg-5'>
        <div class='row gx-4 gx-lg-5 justify-content-center'>
            <div class='col-md-10 col-lg-8 col-xl-7'>
                <h2 class='section-heading'>Definir el concepto de Programa Maestro</h2>
                <p class='text-justify'>Tambien conocido como servidor ofrece un servicio que se puede obtener en una red. Acepta la petición desde la red, realiza el servicio y devuelve el resultado al solicitante. Al ser posible implantarlo como aplicaciones de programas, puede ejecutarse en cualquier sistema donde exista TCP/IP y junto con otros programas de aplicación. El servidor comienza su ejecución antes de comenzar la interacción con el cliente. Su tiempo de vida o de interacción es “interminable”.
                    Los servidores pueden ejecutar tareas sencillas (caso del servidor hora día que devuelve una respuesta) o complejas (caso del servidor ftp en el cual se deben realizar operaciones antes de devolver una respuesta). 
                    Los servidores sencillos procesan una petición a la vez (son secuenciales o interactivos), por lo que no revisan si ha llegado otra petición antes de enviar la respuesta de la anterior.
                    Los más complejos trabajan con peticiones concurrentes aún cuando una sola petición lleve mucho tiempo para ser servida (caso del servidor ftp que debe copiar un archivo en otra máquina). Son complejos pues tienen altos requerimientos de protección y autorización.
                    </p>
                <p class='text-justify'>Programa o proceso que es responsable de aceptar nuevas peticiones: Maestro o Padre.
                    Programas o procesos que deben manejar las peticiones individuales: Esclavos o Hijos.
                    </p>
                <img class='img-fluid' src='assets/img/unidad1-2.png' alt='...' style='width: 100%' />
                <p></p>
            <p></p>
            <p></p>
            <p></p>
                <div class='row'>
                    <div class='col-sm'>
                        <div class='d-flex justify-content-start'>
                            <a class='btn btn-primary text-uppercase justify-content-start' href=\"unidad1-1\">🠔 Anterior tema</a>
                        </div>
                    </div>
    
                    <div class='col-sm'>
                        <div class='d-flex justify-content-end'>
                            <a class='btn btn-primary text-uppercase' href=\"unidad1-3\">Siguiente tema →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>","<article class='mb-4'>
<div class='container px-4 px-lg-5'>
    <div class='row gx-4 gx-lg-5 justify-content-center'>
        <div class='col-md-10 col-lg-8 col-xl-7'>
            <h2 class='section-heading'>Explicar los procesos y tareas del programa maestro</h2>
            <p class='text-justify'>El programa “Maestro” tiene diferentes tareas, entre ellas están el abrir un puerto para que puedan acceder los clientes, esperar y aceptar las peticiones de los clientes, iniciar un programa “Esclavo” para realizar su petición.


                Tareas Especificas del Programa Maestro
                </p>
            <p class='text-justify'>Abrir un puerto local bien conocido al cual pueda acceder los clientes.
                Esperar las peticiones de los clientes.
                Elegir un puerto local para las peticiones que llegan en informar al cliente del nuevo puerto, (innecesario en la mayoría de los casos).
                Iniciar un programa esclavo o proceso hijo que atienda la petición en el puerto local, (el esclavo cuando termina de manejar una petición no se queda esperando por otras).
                Volver a la espera de peticiones mientras los esclavos, en forma concurrente, se ocupan de las anteriores peticiones.
                </p>
            <img class='img-fluid' src='assets/img/unidad1-3.jpg' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-start'>
                        <a class='btn btn-primary text-uppercase justify-content-start' href=\"unidad1-2\">🠔 Anterior tema</a>
                    </div>
                </div>

                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad1-4\">Siguiente tema →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</article>","<article class='mb-4'>
<div class='container px-4 px-lg-5'>
    <div class='row gx-4 gx-lg-5 justify-content-center'>
        <div class='col-md-10 col-lg-8 col-xl-7'>
            <h2 class='section-heading'>Describir los tipos de servidores</h2>
            <p class='text-justify'>El servidor es una entidad fisica que provee un servicio y devuelve resultados: ejecuta el procesamiento de datos, aplicaciones y manejo de informacion o recursos, el servidor permite gestionar la disponibilidad y la seguridad de los datos.

                Los distintos sistemas con diferentes arquitecturas se les ha denominado Cliente/Servidorm estos son clasificados basandose en su funcionalidad.
                
                Servidores de Ficheros
                El cliente formula peticiones de registros a traves de una red al servidor de ficheros
                </p>
            <p class='text-justify'>Servidores de Bases de Datos
                El cliente formula peticiones SQL al servidor de BD, de interes para los casos en los que se requieren preguntas ad-hoc
                
                Servidores de Transcciones
                El cliente hace procedimientos que residen en el servidor, dichos procediminetos ejecutan un conjunto de sentencias SQL
                
                Servidores de Objetos
                Los objetos clientes se comunican con los objetos servidores usando ORB. El cliente invoca un metodo de objeto remoto mientras que el ORB localiza una instancia de esa clase de servidor de objetos, invoca el  metodo solicitado y envia los resultados a los objetos clientes.
                
                Servidores de Web
                La web es la primera aplicacion cliente servidor y consta de clientes universales que se comunican con grandes servidores, estos se ponen en contacto por medio del protocolo HTTP.
                </p>
            <img class='img-fluid' src='assets/img/unidad1-4.png' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-start'>
                        <a class='btn btn-primary text-uppercase justify-content-start' href=\"unidad1-3\">🠔 Anterior tema</a>
                    </div>
                </div>

                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad1-5\">Siguiente tema →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</article>", "<article class='mb-4'>
<div class='container px-4 px-lg-5'>
    <div class='row gx-4 gx-lg-5 justify-content-center'>
        <div class='col-md-10 col-lg-8 col-xl-7'>
            <h2 class='section-heading'>Reconocer las características de la arquitectura  Cliente/Servidor: servicios, recursos compartidos, protocolos asimétricos, independencia de la ubicación, compatibilidad de clientes y servidores, comunicación de mensajes, encapsulación de servicios, escalabilidad e integridad.                    </h2>
            <p class='text-justify'>Caracteristicas de la arquitectura Cliente/Servidor

                El servidor presenta a todos sus clientes una interfaz unica y bien definida
                El cliente no necesita conocer la logica del servidor, solo su interfaz externa
                El cliente no depende de la ubicacion fisica del servidor ni del tipo de equipo fisica en el que se encuentra ni de su sistema operativo
                Los cambios en el servidor implican pocos o ningun cambio en el cliente
                
                </p>
                <p class='section-heading'>Servicio</p>
            <p class='text-justify'>Se trata principalmente de una relacion entre procesos en maquinas diferentes. El proceso servidor proporciona servicios, el cliente consume servicios. Este mecanismo proporciona una preparacion clara de funciones basas en la idea de servicio</p>
            <p class='section-heading'>Recursos Compartidos</p>
            <p class='text-justify'>Un servidor puede atender muchos clientes al mismo tiempo y regular sus accesos a los recursos compartidos.                    </p>
            <p class='section-heading'>Protocolos Asimetricos</p>
            <p class='text-justify'>Hay una relacion 1 a n entre el servidor y los clientes, los clientes siempre inicial el dialogo pidiendo servicios, los servidores esperan pasivamente las peticiones de los clientes
            </p>
            <p class='section-heading'>Transparencia de la Localizacion</p>
            <p class='text-justify'>El servidor es un proceso que puede residir en la misma maquina que los clientes en una maquina diferente a una red. El software cliente/servidor oculta la localizacion del servidor a los clientes, redirigiendo las llamadas a los servidores cuando sea necesario.
            </p>
            <p class='section-heading'>Independencia</p>
            <p class='text-justify'>El softwre cliente/servidor ideal es independiente del hardware y del sistema operativo.
            </p>
            <p class='section-heading'>Comunicacion de Mensajes</p>
            <p class='text-justify'>Los clientes y servidores interactuan utilizando un mecanismo de paso de mensajes, el mensaje es el soporte para las peticiones de servicios y las respuestas.
            </p>
            <p class='section-heading'>Encapsulacion de Servicios</p>
            <p class='text-justify'>El servidor es un especialista, un mensaje le dice al servidor que servicio se solicita, es la tarea del servidor determinar como realizar el trabajo, los servidores se puede actualizar sin afectar a los clientes siempre y cuando no se modifique su interfaz.
            </p>
            <p class='section-heading'>Escabilidad</p>
            <p class='text-justify'>Los sistemas cliente/servidor se pueden escalar horizontal y verticalmente.
                Horizontalmente significa añadir o eliminar clientes mientras que verticalmente significa migrar a maquinas servidores más potentes o multiservidores
                </p>
            <p class='section-heading'>Integridad</p>
            <p class='text-justify'>El codigo y los datos del servidor se mantienen centralizados con lo que es menos costoso su mantenimiento y controlar la integridad de los datos compartidos.                    </p>

            <img class='img-fluid' src='assets/img/unidad1-5.png' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-start'>
                        <a class='btn btn-primary text-uppercase justify-content-start' href=\"unidad1-4\">🠔 Anterior tema</a>
                    </div>
                </div>

                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad1-6\">Siguiente tema →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</article>","<article class='mb-4'>
<div class='container px-4 px-lg-5'>
    <div class='row gx-4 gx-lg-5 justify-content-center'>
        <div class='col-md-10 col-lg-8 col-xl-7'>
            <h2 class='section-heading'>Identificar las ventajas y desventajas de la arquitectura  Cliente/Servidor .</h2>
            <p class='section-heading'>Ventajas de la Arquitectura Cliente/Servidor</p>
            <p class='text-justify'>Se pueden usar componentes software/hardware de varios fabricantes, contribuye a la reducción de costos.
                Facilita la integración entres sistemas distintos y comparte información (Puede integrar varias PCs sin que tenga el mismo sistema operativo).
                Es más rápido el mantenimiento y desarrollo de aplicaciones (SQL, sockets, RPC).
                Contribuye a proporcionar a los diferentes departamentos de una organización, soluciones locales. Pero permitiendo la integración de la información relevante a nivel global.
                </p>
            <p class='section-heading'>Desventajas de la Arquitectura Cliente/Servidor</p>
            <p class='text-justify'>El mantenimiento de los sistemas es más difícil pues implica los distintos componentes de software y hardware distribuidos por distintos proveedores, es difícil detectar las fallas.
                Escasas herramientas de administración.
                Los clientes y servidores deben usar el mimo mecanismo (sockets, RPC), por lo tanto, deben tener mecanismos generales en distintas plataformas.
                En el aspecto de la seguridad se deben hacer verificaciones en el cliente y el servidor.
                El desempeño puede disminuir por congestión de red y el tráfico de datos.
                </p>
            <img class='img-fluid' src='assets/img/unidad1-6.png' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-start'>
                        <a class='btn btn-primary text-uppercase justify-content-start' href=\"unidad1-5\">🠔 Anterior tema</a>
                    </div>
                </div>

                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad1-7\">Siguiente tema →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</article>","<article class='mb-4'>
<div class='container px-4 px-lg-5'>
    <div class='row gx-4 gx-lg-5 justify-content-center'>
        <div class='col-md-10 col-lg-8 col-xl-7'>
            <h2 class='section-heading'>Identificar las ventajas y desventajas de la arquitectura Cliente/Servidor .</h2>
            <p class='section-heading'>Computo en la Nube</p>
            <p class='text-justify'>La computación en la nube (o cloud computing, en inglés) es una tecnología que permite acceder remotamente, de cualquier lugar del mundo y en cualquier momento, a softwares, almacenamiento de archivos y procesamiento de datos a través de Internet, sin la necesidad de conectarse a un ordenador personal o servidor local.
                La computación en nube ofrece a las empresas modelos prácticos para acceder a las ofertas de infraestructura, plataforma y software de pago por uso. Con la computación en nube, las empresas pueden liberar capital, optimizar el mantenimiento de TI, modernizar y escalar los enfoques empresariales, convertir la seguridad y la flexibilidad en servicios y soluciones, ayudar a los clientes de nuevas maneras, y hacer crecer su empresa en las condiciones de mercado siempre cambiantes.
                </p>
            <p class='section-heading'>Tipos de Nubes</p>
            <p class='section-heading'>Nube Privada</p>
            <p class='text-justify'>El modelo de nube privada hace referencia a los recursos de computación en nube que se usan exclusivamente en una misma empresa u organización. La nube privada puede almacenarse en el centro de datos interno o un proveedor de servicios puede alojarla en la nube.
                </p>
            <img class='img-fluid' src='assets/img/unidad1-7.jpg' alt='...' style='width: 100%' />
            <p class='section-heading'>Nube Publica</p>
            <p class='text-justify'>Cuando una organización implementa un modelo de nube pública, toda la infraestructura de hardware, software y soporte es propiedad del proveedor de servicios que la administra y la proporciona exclusivamente por Internet. Puede acceder a estos servicios y administrar la cuenta mediante un navegador web.</p>
            <img class='img-fluid' src='assets/img/unidad1-8.jpg' alt='...' style='width: 100%' />
            <p class='section-heading'>Nube Hibrida</p>
            <p class='text-justify'>Un modelo de computación en nube híbrido combina las nubes públicas y privadas para compartir datos y aplicaciones. Las nubes híbridas conectan la infraestructura y las aplicaciones entre recursos en nube con los recursos existentes que no se encuentran en la nube. Este enfoque le aporta a su empresa más flexibilidad y más opciones de implementación.
            </p>
            <img class='img-fluid' src='assets/img/unidad1-9.png' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-start'>
                        <a class='btn btn-primary text-uppercase justify-content-start' href=\"unidad1-6\">🠔 Anterior tema</a>
                    </div>
                </div>

                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad1-8\">Siguiente tema →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</article>","<article class='mb-4'>
<div class='container px-4 px-lg-5'>
    <div class='row gx-4 gx-lg-5 justify-content-center'>
        <div class='col-md-10 col-lg-8 col-xl-7'>
            <h2 class='section-heading'>Definir los conceptos de Infrastructure as a Service (IAAS), Platform as a Service (PAAS), Software as a Service (SAAS).                    </h2>
            <p class='section-heading'>Infrastructure as a Service (IAAS)</p>
            <p class='text-justify'>Piense en IaaS como si fueran los componentes de la TI basada en la nube. En este modelo, un proveedor de nube aloja los componentes de infraestructura que tradicionalmente se almacenan en centros de datos internos. Por ejemplo, el hardware de servidores, almacenamiento y redes, junto con el hipervisor (capa de virtualización), suelen alojarse en las instalaciones. Con IaaS, su organización puede elegir cuándo y cómo desean administrar las cargas de trabajo sin necesidad de comprar, administrar y respaldar la infraestructura subyacente. IaaS permite que la infraestructura esté en funcionamiento rápidamente, con un modelo de pago por uso.</p>
            <img class='img-fluid' src='assets/img/unidad1-10.jpg' alt='...' style='width: 100%' />
            <p class='section-heading'>Platform as a Service (PASS)</p>
            <p class='text-justify'>PaaS se suma al modelo de IaaS, pero suele ser algo específico de las herramientas de hardware y software para el desarrollo de aplicaciones. Además de proporcionar componentes de infraestructura, los proveedores de nube también alojan y administran sistemas operativos y middleware que los desarrolladores necesitan para crear y ejecutar aplicaciones. PaaS ofrece un modelo a petición de pago por uso.                    </p>
            <img class='img-fluid' src='assets/img/unidad1-11.png' alt='...' style='width: 100%' />
            <p class='section-heading'>Software as a Service (SAAS)</p>
            <p class='text-justify'>Con SaaS, los proveedores de nube alojan y administran toda la infraestructura, además de las aplicaciones para usuarios finales. Cuando su empresa elige un modelo de SaaS, no necesita instalar nada; los usuarios podrán iniciar sesión y comenzar a usar de inmediato la aplicación del proveedor de nube que se ejecuta en la infraestructura. SaaS lo libera para que pueda dedicarse únicamente a pensar en cómo usará su empresa dicho software, en vez de pensar en cómo mantenerlo. SaaS está disponible a petición o por suscripción.
            </p>
            <img class='img-fluid' src='assets/img/unidad1-12.jpg' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-start'>
                        <a class='btn btn-primary text-uppercase justify-content-start' href=\"unidad1-7\">🠔 Anterior tema</a>
                    </div>
                </div>

                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad1-9\">Siguiente tema →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</article>","<article class='mb-4'>
<div class='container px-4 px-lg-5'>
    <div class='row gx-4 gx-lg-5 justify-content-center'>
        <div class='col-md-10 col-lg-8 col-xl-7'>
            <h2 class='section-heading'>Describir la arquitectura  Cliente/Servidor  con los modelos de cómputo en la nube IAAS, PAAS, SAAS.</h2>
            <p class='section-heading'>IAAS</p>
            <p class='text-justify'>El enfoque tradicional para el hospedaje de aplicaciones requiere la compra de hardware y la administración de todas las instalaciones de software, incluido el sistema operativo. Originalmente, esto implicaba centros de datos y hardware físico costosos. Los desafíos que implica el hardware físico operativo son muchos, entre los que se incluyen:                    </p>
            <ul class='text-justify'>
                <li>La necesidad de comprar en exceso por si acaso o para escenarios de demanda máxima.</li>
                <li>Protección del acceso físico al hardware.</li>
                <li>Responsabilidad por el error de hardware (por ejemplo, un error de disco).</li>
                <li>Refrigeración.</li>
                <li>Configuración de enrutadores y equilibradores de carga.</li>
                <li>Redundancia energética.</li>
                <li>Protección del acceso a software.</li>
            </ul>
            <img class='img-fluid' src='assets/img/unidad1-13.jpg' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p class='section-heading'>PAAS</p>
            <p class='text-justify'>Plataforma como servicio (PaaS) ofrece soluciones configuradas que los desarrolladores pueden conectar directamente. PaaS es otro término para el hospedaje administrado. Elimina la necesidad de administrar el sistema operativo base, las revisiones de seguridad y, en muchos casos, las dependencias de terceros. Entre los ejemplos de plataformas se incluyen las aplicaciones web, las bases de datos y los back-ends móviles.
                PaaS aborda los desafíos comunes a IaaS. PaaS permite que el desarrollador se centre en el código o el esquema de la base de datos en lugar de cómo se implementa. Entre las ventajas de PaaS se incluyen:
                Modelos de pago por uso que eliminan el recargo de invertir en máquinas inactivas.
                Implementación directa y mejoras de canalizaciones de integración continua (CI), entrega continua (CD) y DevOps.
                Revisiones de seguridad y actualizaciones automáticas.
                Escalado horizontal y escalado vertical (escala elástica) con botón de comando.
                </p>
            <img class='img-fluid' src='assets/img/unidad1-14.jpg' alt='...' style='width: 100%' />
            <p class='section-heading'>Software as a Service (SAAS)</p>
            <p class='text-justify'>Con SaaS, los proveedores de nube alojan y administran toda la infraestructura, además de las aplicaciones para usuarios finales. Cuando su empresa elige un modelo de SaaS, no necesita instalar nada; los usuarios podrán iniciar sesión y comenzar a usar de inmediato la aplicación del proveedor de nube que se ejecuta en la infraestructura. SaaS lo libera para que pueda dedicarse únicamente a pensar en cómo usará su empresa dicho software, en vez de pensar en cómo mantenerlo. SaaS está disponible a petición o por suscripción.
            </p>
            <img class='img-fluid' src='assets/img/unidad1-15.png' alt='...' style='width: 100%' />
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-start'>
                        <a class='btn btn-primary text-uppercase justify-content-start' href=\"unidad1-8\">🠔 Anterior tema</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</article>"];
        for($i=0; $i<9; $i++) {
            DB::table('publicaciones')->insert([
                'unidad'=>$unidad[$i],
                'titulo'=>$titulo[$i],
                'subtitulo'=>$subtitulo[$i],
                'autor'=>$autor[$i],
                'fecha'=>$fecha[$i],
                'contenido'=>$contenido[$i],
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }
    }
}