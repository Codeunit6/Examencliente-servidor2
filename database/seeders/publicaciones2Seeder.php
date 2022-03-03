<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class publicaciones2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unidad=["Unidad 2","Unidad 2","Unidad 2","Unidad 2","Unidad 2","Unidad 2","Unidad 2","Unidad 2","Unidad 2","Unidad 2","Unidad 2","Unidad 2","Unidad 2","Unidad 2","Unidad 2","Unidad 2","Unidad 2"];
        $titulo = ["Reconocer los conceptos de representacion distribuida, presentacion remota, logica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas","Definir los conceptos de logica de acceso, presentacion y negocio de datos","Explicar el proceso de diseño de logica de acceso de datos, logica de presentacion de datos y logica de negocio o logica de aplicacion","Explicar el proceso de desarrollo de logica de acceso de datos, logica de representacion de datos y logica de negocio o logica de aplicacion","Definir concepto de nivel vinculado a programacion web","Explicar el proceso de planificacion en dos niveles","Explicar el proceso de planificacion en tres niveles","Explicar el proceso de planificacion multiniveles","Identificar problemas de actualizacion y mantenimiento de aplicaciones multinivel","Reconocer los conceptos de modelo, control y vista, en las arquitecturas cliente/servidor","Reconocer los conceptos de modelo controlador vista (MVC) en las arquitecturas cliente/servidor","Explicar el proceso de flujo de control a partir del MVC, en las arquitecturas Cliente/Servidor","Describir el desarrollo de software a partir del MVC, en las arquitecturas Cliente/Servidor","Definir el concepto de comunicacion orientada a conexion e interfaz de programacion de aplicaciones (API)","Explicar el proceso de comunicacion y configuracion orientada a conexion e interfaz de programacion de aplicaciones (API)","Definir el concepto de sockets","Explicar el proceso del uso de sockets en aplicaciones Cliente/Servidor"];
        $subtitulo =["Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor","Cliente-Servidor"];
        $autor =["Fernando Brayan Mejia Gomez","Eduardo Antonio Mendez Sandoval","Fernando Brayan Mejia Gomez","Eduardo Antonio Mendez Sandoval","Fernando Brayan Mejia Gomez","Eduardo Antonio Mendez Sandoval","Fernando Brayan Mejia Gomez","Eduardo Antonio Mendez Sandoval","Fernando Brayan Mejia Gomez","Eduardo Antonio Mendez Sandoval","Fernando Brayan Mejia Gomez","Eduardo Antonio Mendez Sandoval","Fernando Brayan Mejia Gomez","Eduardo Antonio Mendez Sandoval","Fernando Brayan Mejia Gomez","Eduardo Antonio Mendez Sandoval","Fernando Brayan Mejia Gomez"];
        $fecha=["01/03/22","01/03/22","01/03/22","01/03/22","01/03/22","01/03/22","01/03/22","01/03/22","01/03/22","01/03/22","01/03/22","01/03/22","01/03/22","01/03/22","01/03/22","01/03/22","01/03/22"];
        $contenido=["<article class='mb-4'>
        <div class='container px-4 px-lg-5'>
            <div class='row gx-4 gx-lg-5 justify-content-center'>
                <div class='col-md-10 col-lg-8 col-xl-7'>
                    <h2 class='section-heading'>Reconocer los conceptos de representacion distribuida, presentacion remota, logica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas</h2>
                    <p class='section-heading'>Representación distribuida </p>
                    <p class='text-justify'>Sistemas cuyos componentes hardware y software, que están en ordenadores conectados en red, se comunican y coordinan sus acciones mediante el paso de mensajes, para el logro de un objetivo. En todo sistema distribuido se establecen una o varias comunicaciones siguiendo un protocolo prefijado mediante un esquema cliente–servidor.</p>
                    <img class='img-fluid' src='assets/img/unidad2-1.jpg' alt='...' style='width: 100%' />
                    <p class='section-heading'>Representación remota</p>
                    <p class='text-justify'>La lógica de la aplicación y la base de datos se encuentran en el servidor. El cliente recibe y formatea los datos para interactuar con el usuario.</p>
                    <p class='section-heading'>Representación lógicaa</p>
                    <p class='text-justify'>El cliente se encarga de la interacción con el usuario y de algunas funciones triviales de la aplicación. Por ejemplo, controles de rango de campos, campos obligatorios, etc. Mientras que el resto de la aplicación, junto con la base de datos, están en el servidor.</p>
                    <p class='section-heading'>Acceso a datos remotos </p>
                    <p class='text-justify'>Este proceso se basa en la unión entre los servidores. Cuando la unión se establece entre dos servidores, el servidor que recibe por parte de alguno de sus usuarios una petición de ejecución de una consulta sobre otro servidor transmite la consulta al servidor remoto.</p>
                    
                    <p></p>
                    <p></p>
                    <p></p>
                    <div class='row'>
                        <div class='col-sm'>
                            <div class='d-flex justify-content-end'>
                                <a class='btn btn-primary text-uppercase' href=\"unidad2-2\">Siguiente tema →</a>
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
                <h2 class='section-heading'>Definir los conceptos de logica de acceso, presentacion y negocio de datos</h2>
                <p class='section-heading'>Concepto de lógica de acceso </p>
                <p class='text-justify'>El control de acceso lógico es la principal línea de defensa para la mayoría de los sistemas, permitiendo prevenir el ingreso de personas no autorizadas a su información. Para controlar el acceso se emplean 2 procesos: identificación y autenticación. Se denomina identificación al momento en que el usuario se da a conocer en el sistema; y autenticación a la verificación que realiza el sistema sobre esa identificación. </p>
                <p class='section-heading'>Negocio a datos </p>
                <p class='text-justify'>El proceso cliente/servidor no es una moda pasajera, sino que constituye un cambio fundamental en el sector informático y garantiza que no se está volviendo a las formas antiguas en la actividad comercial. Los mainframes han adquirido una nueva forma como servidores de empresa y las estaciones de trabajo se utilizan como puertas de entrada al universo en expansión de los servicios basados en red. </p>
                <img class='img-fluid' src='assets/img/unidad2-2.jpg' alt='...' style='width: 100%' />
                <p></p>
                <p></p>
                <p></p>
                <div class='row'>
                    <div class='col-sm'>
                        <div class='d-flex justify-content-end'>
                            <a class='btn btn-primary text-uppercase' href=\"unidad2-1\">🠔 Anterior tema</a>
                        </div>
                    </div>
                    <div class='col-sm'>
                        <div class='d-flex justify-content-end'>
                            <a class='btn btn-primary text-uppercase' href=\"unidad2-3\">Siguiente tema →</a>
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
            <h2 class='section-heading'>Explicar el proceso de diseño de logica de acceso de datos, logica de presentacion de datos y logica de negocio o logica de aplicacion</h2>
            <p class='section-heading'>Proceso de diseño de lógica de acceso de datos</p>
            <p class='text-justify'>El diseño de una base de datos es un proceso que se guía por varios principios bien definidos, partiendo de un dominio del cual se obtendrá un modelo conceptual, seguidamente un modelo lógico, al cual se le debe aplicar normalización y finalmente obtener un modelo físico y poder implementarlo</p>
            <p class='section-heading'>Lógica de aplicación</p>
            <p class='text-justify'>Las aplicaciones cliente/servidor normalmente distribuyen los componentes de la aplicación de forma que la base de datos reside en el servidor, el interfaz de usuario reside en el cliente, y la lógica de negocio puede residir tanto en el cliente, como en el servidor</p>
            <img class='img-fluid' src='assets/img/unidad2-3.png' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-4\">🠔 Anterior tema</a>
                    </div>
                </div>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-5\">Siguiente tema →</a>
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
            <h2 class='section-heading'>Explicar el proceso de desarrollo de logica de acceso de datos, logica de representacion de datos y logica de negocio o logica de aplicacion</h2>
            <p class='section-heading'>Proceso de desarrollo de lógica de acceso a datos</p>
            <p class='text-justify'>Previamente a la fase de diseño lógico, se debe elegir un tipo de base de datos. Es decir, no hay que escoger todavía un SGBD concreto, sino que simplemente hay que seleccionar el tipo de base de datos que se quiere implementar. Es importante que quede claro que el tipo de base de datos determina el esquema de diseño lógico. Una vez elegido el tipo de SGBD donde se quiere implementar la base de datos, ya se puede iniciar la fase del diseño lógico. </p>
            <p class='section-heading'>Proceso de desarrollo de lógica de aplicación</p>
            <p class='text-justify'>Estos procesos gestionan la lógica empresarial de la aplicación y pueden acceder a los servicios de tercer nivel. La capa lógica de la aplicación es donde se produce la mayor parte del trabajo de proceso. Varios componentes de cliente pueden acceder simultáneamente a los procesos de segundo nivel, por lo que esta capa lógica de aplicación debe gestionar sus propias transacciones. </p>
            <img class='img-fluid' src='assets/img/unidad2-4.png' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-3\">🠔 Anterior tema</a>
                    </div>
                </div>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-5\">Siguiente tema →</a>
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
            <h2 class='section-heading'>Definir concepto de nivel vinculado a programacion web</h2>
            <p class='section-heading'>Concepto de nivel vinculado a programación web</p>
            <p class='text-justify'>Desarrollo web significa construir y mantener sitios web; es el trabajo que tiene lugar en un segundo plano y que permite que una web tenga una apariencia impecable, un funcionamiento rápido y un buen desempeño para permitir la mejor experiencia de usuario. Los desarrolladores web son como duendes con poderes: nunca los ves, pero son los que hacen que todo esté bien y funcione de manera rápida y eficiente.</p>
            <img class='img-fluid' src='assets/img/unidad2-5.jpg' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-4\">🠔 Anterior tema</a>
                    </div>
                </div>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-6\">Siguiente tema →</a>
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
            <h2 class='section-heading'>Explicar el proceso de planificacion en dos niveles</h2>
            <p class='section-heading'>Proceso de planificación en dos niveles </p>
            <p class='text-justify'>El esquema operativo de un planificador de dos niveles es como sigue: 
            Los criterios que podría utilizar el planificador de nivel superior para tomar sus decisiones son los que se indican a continuación:
            </p>
            <ul>
                <li>Se carga en la memoria principal cierto subconjunto de los procesos ejecutables</li>
                <li>El planificador se restringe a ellos durante cierto tiempo.</li>
            </ul>
            <img class='img-fluid' src='assets/img/unidad2-6.jpg' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-5\">🠔 Anterior tema</a>
                    </div>
                </div>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-7\">Siguiente tema →</a>
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
            <h2 class='section-heading'>Explicar el proceso de planificacion en tres niveles</h2>
            <p class='section-heading'>Proceso de planificación en tres niveles </p>
            <p class='text-justify'>Los tres niveles deben comunicarse entre sí. Abiertos, los protocolos estándar y las API expuestas simplifican esta comunicación. Puede escribir componentes de cliente en cualquier lenguaje de programación, como por ejemplo Java o C++. Estos clientes se ejecutan en cualquier sistema operativo, hablando con la capa lógica de la aplicación. Las bases de datos del tercer nivel pueden ser de cualquier diseño, si la capa de aplicación puede consultarlas y manipularlas. La clave de esta arquitectura es la capa lógica de la aplicación.</p>
            <img class='img-fluid' src='assets/img/unidad2-7.jpg' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-6\">🠔 Anterior tema</a>
                    </div>
                </div>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-8\">Siguiente tema →</a>
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
            <h2 class='section-heading'>Explicar el proceso de planificacion multiniveles</h2>
            <p class='section-heading'>Proceso de la planificación multiniveles </p>
            <p class='text-justify'>La Planificación de procesos en Minix se hace mediante colas multinivel sin realimentación, habiendo un total de tres colas. La Cola de mayor prioridad se encarga de las tareas (TASK_Q), la siguiente en prioridad, se hace cargo de los servidores (SERVER_Q) y por último, la de menor prioridad, gestiona los procesos de usuario (USER_Q). Dentro de los niveles de tareas y servidores los procesos se ejecutan hasta que se bloquean.</p>
            <img class='img-fluid' src='assets/img/unidad2-8.jpg' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-7\">🠔 Anterior tema</a>
                    </div>
                </div>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-9\">Siguiente tema →</a>
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
            <h2 class='section-heading'>Identificar problemas de actualizacion y mantenimiento de aplicaciones multinivel</h2>
            <p class='section-heading'>Identificar problemas de actualización</p>
            <p class='text-justify'>Para identificar y resolver problemas relacionados con WSIF, puede utilizar los recursos estándar de WebSphere Application Server rastreo y registro . Si encuentra un problema que cree que podría estar relacionado con WSIF, puede comprobar si hay mensajes de error en la consola administrativa de WebSphere Application Server y en el archivo stdout.log del servidor de aplicaciones. </p>
            <p class='text-justify'>También puede habilitar el rastreo de depuración del servidor de aplicaciones para proporcionar un vuelco de excepciones detallado. Una lista de los mensajes del sistema de tiempo de ejecución WSIF, con detalles de lo que significa cada mensaje, se proporciona en Mensajes WSIF (Web Services Invocation Framework). Una lista de las principales restricciones conocidas que se aplican al utilizar WSIF se proporciona en WSIF-Restricciones conocidas. </p>
            <img class='img-fluid' src='assets/img/unidad2-9.jpg' alt='...' style='width: 100%' />
            <p class='section-heading'>Mantenimiento de aplicaciones de multinivel</p>
            <p class='text-justify'>La aplicación reside en el cliente mientras que la base de datos se encuentra en el servidor. En este tipo de aplicaciones el peso del cálculo recae en el cliente, mientras que el servidor hace la parte menos pesada, y eso que los clientes suelen ser máquinas menos potentes que los servidores. Además, está el problema de la actualización y el mantenimiento de las aplicaciones, ya que las modificaciones a la misma han de ser trasladada a todos los clientes. 
Para solucionar estos problemas se ha desarrollado el concepto de arquitecturas de tres niveles: interfaz de presentación, lógica de la aplicación y los datos. La capa intermedia es el código que el usuario invoca para recuperar los datos deseados. La capa de presentación recibe los datos y los formatea para mostrarlos adecuadamente. Esta división entre la capa de presentación y la de la lógica permite una gran flexibilidad a la hora de construir aplicaciones, ya que se pueden tener múltiples interfaces sin cambiar la lógica de la aplicación. 
La tercera capa consiste en los datos que gestiona la aplicación. Estos datos pueden ser cualquier fuente de información como una base de datos o documentos XML. Convertir un sistema de tres niveles a otro multinivel es fácil ya que consiste en extender la capa intermedia permitiendo que convivan múltiples aplicaciones en lugar de una sola 
</p>
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-8\">🠔 Anterior tema</a>
                    </div>
                </div>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-10\">Siguiente tema →</a>
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
            <h2 class='section-heading'>Reconocer los conceptos de modelo, control y vista, en las arquitecturas cliente/servidor</h2>
            <p class='section-heading'>Concepto de modelo</p>
            <p class='text-justify'>Los modelos son uno de los componentes principales de las aplicaciones desarrolladas bajo el patrón MVC, que tienen la responsabilidad de acceder a los datos, modificarlos, etc. En el patrón además los modelos mantienen lo que se llama la lógica de negocio, que son las reglas que deben cumplirse para trabajar con los datos. Por tanto, el tipo de acciones que le vamos a solicitar a un modelo es, por ejemplo, obtener datos, insertarlos, modificarlos, etc. En las operaciones que modifiquen los datos además se tendrá que realizar cierta validación de esos datos, para asegurarnos que tienen la forma que es necesaria antes de guardarlos. </p>
            <img class='img-fluid' src='assets/img/unidad2-10.jpg' alt='...' style='width: 100%' />
            <p class='section-heading'>Concepto de controlador </p>
            <p class='text-justify'>Aunque suponemos que todos los lectores deben tener unas nociones básicas generales sobre el concepto de controlador, cabe aclarar que éstos son una de las piezas que, junto con los modelos y las vistas, forman parte del patrón MVC. En Laravel, como en cualquier otro de los frameworks PHP populares, son una importante parte de las aplicaciones. Su función es la de definir el código a ejecutar como comportamiento frente a una acción solicitada dentro de la aplicación. Generalmente para poder desempeñar su labor se apoyan en los modelos y las vistas. El controlador sabe qué métodos del modelo debe invocar, ya sea para actualizar cierta información o para obtener ciertos datos, así como las vistas que deben presentar la información como respuesta al usuario, después de la realización de las acciones necesarias. </p>
            <p class='section-heading'>Concepto de vista </p>
            <p class='text-justify'>Como decíamos, la mayoría seguro entenderá este concepto, no obstante, vamos a exponerlo rápidamente para aquel que no sepa de qué estamos hablando. Las vistas son una de las capas que tiene el sistema MVC, que trata de la separación del código según sus responsabilidades. En este caso, las vistas mantienen el código de lo que sería la capa de presentación. 
Como capa de presentación, las vistas se encargan de realizar la salida de la aplicación que generalmente en el caso de PHP será código HTML. Por tanto, una vista será un archivo PHP que contendrá mayoritariamente código HTML, que se enviará al navegador para que éste renderice la salida para el usuario. 
</p>
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-9\">🠔 Anterior tema</a>
                    </div>
                </div>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-11\">Siguiente tema →</a>
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
            <h2 class='section-heading'>Reconocer los conceptos de modelo controlador vista (MVC) en las arquitecturas cliente/servidor</h2>
            <p class='section-heading'>MVC (modelo, vista, controlador) </p>
            <p class='text-justify'>Es un patrón arquitectónico de software que separa una aplicación en tres capas descritas como su acrónimo lo indica. Laravel, así como la mayoría de frameworks en PHP implementan este patrón de diseño en donde cada capa maneja un aspecto de la aplicación. Pero antes de ver cómo Laravel está diseñado para implementar este patrón de software, vamos a tratar de dejar este concepto un poco más claro definiendo cada una de sus partes.</p>
            <img class='img-fluid' src='assets/img/unidad2-11.png' alt='...' style='width: 100%' />
            <p class='section-heading'>Modelo</p>
            <p class='text-justify'>Hace referencia a la estructura de datos de la aplicación. Los datos pueden ser transferidos desde la base de datos, una clase, un servicio, u otros, directamente a la vista o ser transformados en el controlador para ser actualizados nuevamente al origen.</p>
            <p class='section-heading'>Vista</p>
            <p class='text-justify'>Es la representación de la información en una interfaz de usuario. Por lo general en interfaces no estáticas se representan los datos que vienen directamente del modelo o estos son transformados en un proceso intermedio en el controlador. En vistas estáticas por lo general no hace falta que las vistas sean renderizadas con datos enviados del controlador.</p>
            <p class='section-heading'>Controlador</p>
            <p class='text-justify'>Es el lugar en donde se implementa la lógica de la aplicación, los procedimientos, algoritmos y rutinas que hacen que funcione el software. Actúa como interfaz entre los componentes de modelo y vista aplicando las transformaciones y lógica necesarias.</p>
            
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-10\">🠔 Anterior tema</a>
                    </div>
                </div>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-12\">Siguiente tema →</a>
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
            <h2 class='section-heading'>Explicar el proceso de flujo de control a partir del MVC, en las arquitecturas Cliente/Servidor</h2>
            <p class='section-heading'>Proceso de flujo de control a partir del MVC</p>
            <ul>
                <li>1.	El usuario interactúa con la interfaz de usuario de alguna forma (por ejemplo, el usuario pulsa un botón, enlace, etc.)</li>
                <li>2.	El controlador recibe (por parte de los objetos de la interfaz-vista) la notificación de la acción solicitada por el usuario. El controlador gestiona el evento que llega, frecuentemente a través de un gestor de eventos (handler) o callback.</li>
                <li>3.	El controlador accede al modelo, actualizándolo, posiblemente modificándolo de forma adecuada a la acción solicitada por el usuario (por ejemplo, el controlador actualiza el carro de la compra del usuario). Los controladores complejos están a menudo estructurados usando un patrón de comando que encapsula las acciones y simplifica su extensión.</li>
                <li>4.	El controlador delega a los objetos de la vista la tarea de desplegar la interfaz de usuario. La vista obtiene sus datos del modelo para generar la interfaz apropiada para el usuario donde se refleja los cambios en el modelo (por ejemplo, produce un listado del contenido del carro de la compra). El modelo no debe tener conocimiento directo sobre la vista. Sin embargo, se podría utilizar el patrón Observador para proveer cierta indirección entre el modelo y la vista, permitiendo al modelo notificar a los interesados de cualquier cambio. Un objeto vista puede registrarse con el modelo y esperar a los cambios, pero aun así el modelo en sí mismo sigue sin saber nada de la vista. El controlador no pasa objetos de dominio (el modelo) a la vista, aunque puede dar la orden a la vista para que se actualice. Nota: En algunas implementaciones la vista no tiene acceso directo al modelo, dejando que el controlador envíe los datos del modelo a la vista.</li>
                <li>5.	La interfaz de usuario espera nuevas interacciones del usuario, comenzando el ciclo nuevamente.</li>
            </ul>
            <img class='img-fluid' src='assets/img/unidad2-12.jpg' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-11\">🠔 Anterior tema</a>
                    </div>
                </div>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-13\">Siguiente tema →</a>
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
            <h2 class='section-heading'>Describir el desarrollo de software a partir del MVC, en las arquitecturas cliente/servidor</h2>
            <p class='text-justify'>Modelo Vista Controlador (MVC) es un estilo de arquitectura de software que separa los datos de una aplicación, la interfaz de usuario, y la lógica de control en tres componentes distintos.
Se trata de un modelo muy maduro y que ha demostrado su validez a lo largo de los años en todo tipo de aplicaciones, y sobre multitud de lenguajes y plataformas de desarrollo.
</p>
            <ul>
                <li>El Modelo que contiene una representación de los datos que maneja el sistema, su lógica de negocio, y sus mecanismos de persistencia.</li>
                <li>La Vista, o interfaz de usuario, que compone la información que se envía al cliente y los mecanismos interacción con éste.</li>
                <li>El Controlador, que actúa como intermediario entre el Modelo y la Vista, gestionando el flujo de información entre ellos y las transformaciones para adaptar los datos a las necesidades de cada uno</li>
            </ul>
            <p class='text-justify'>El modelo es el responsable de:</p>
            <ul>
                <li>Acceder a la capa de almacenamiento de datos. Lo ideal es que el modelo sea independiente del sistema de almacenamiento.</li>
                <li>Define las reglas de negocio (la funcionalidad del sistema). Un ejemplo de regla puede ser: Si la mercancía pedida no está en el almacén, consultar el tiempo de entrega estándar del proveedor.</li>
                <li>Lleva un registro de las vistas y controladores del sistema.</li>
                <li>Si estamos ante un modelo activo, notificará a las vistas los cambios que en los datos pueda producir un agente externo (por ejemplo, un fichero por lotes que actualiza los datos, un temporizador que desencadena una inserción, etc.).</li>
            </ul>
            <img class='img-fluid' src='assets/img/unidad2-13.png' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-12\">🠔 Anterior tema</a>
                    </div>
                </div>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-14\">Siguiente tema →</a>
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
            <h2 class='section-heading'>Definir el concepto de comunicacion orientada a conexion e interfaz de programacion de aplicaciones (API)</h2>
            <p class='section-heading'>Concepto de comunicación orientada a conexión</p>
            <p class='text-justify'>La comunicación se puede establecer de dos maneras entre dos o más dispositivos que están orientados a la conexión y sin conexión. Las capas de red pueden ofrecer estos dos tipos diferentes de servicios a su capa predecesora para transferir datos. Los servicios orientados a la conexión implican el establecimiento y la terminación de la conexión, mientras que los servicios sin conexión no requieren ningún proceso de creación y terminación de la conexión para transferir datos.
Otra diferencia entre los servicios orientados a la conexión y los servicios sin conexión es que la comunicación orientada a la conexión usa un flujo de datos y es vulnerable a fallas del enrutador, mientras que la comunicación sin conexión usa mensajes y es robusta a la falla del enrutador
</p>
<p class='section-heading'>Concepto interfaz de comunicación de aplicaciones </p>
            <p class='text-justify'>Una interfaz de programación de aplicaciones (API) es un código que permite que dos programas de software se comuniquen entre sí.
La API define la forma correcta para que un desarrollador escriba un programa que solicite servicios de un sistema operativo (SO) u otra aplicación. Las API se implementan mediante llamadas a funciones compuestas de verbos y sustantivos. La sintaxis requerida se describe en la documentación de la aplicación a la que se llama.
</p>
            
            <img class='img-fluid' src='assets/img/unidad2-14.png' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-13\">🠔 Anterior tema</a>
                    </div>
                </div>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-15\">Siguiente tema →</a>
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
            <h2 class='section-heading'>Explicar el proceso de comunicacion y configuracion orientada a conexion e interfaz de programacion de aplicaciones (API)</h2>
            <p class='section-heading'>Proceso de comunicación </p>
            <p class='text-justify'>Los procesos de las aplicaciones se ejecutan en los servidores. Un único servidor puede ejecutar varios procesos de aplicaciones al mismo tiempo. Estos procesos esperan hasta que el cliente inicia comunicación con una solicitud de información u otros servicios.
Cada proceso de aplicación que se ejecuta en el servidor se configura para utilizar un número de puerto, ya sea predeterminado o de forma manual por el administrador del sistema. Un servidor individual no puede tener dos servicios asignados al mismo número de puerto dentro de los mismos servicios de la capa de transporte.
</p>
<p class='section-heading'>Configuración orientada a conexión </p>
            <p class='text-justify'>TCP es un protocolo orientado a conexión. No hay relaciones maestro/esclavo. Las aplicaciones, sin embargo, utilizan un modelo cliente/servidor en las comunicaciones. 
Un servidor es una aplicación que ofrece un servicio a usuarios de Internet; un cliente es el que pide ese servicio. Una aplicación consta de una parte de servidor y una de cliente, que se pueden ejecutar en el mismo o en diferentes sistemas. 
Los usuarios invocan la parte cliente de la aplicación, que construye una solicitud para ese servicio y se la envía al servidor de la aplicación que usa TCP/IP como transporte. 
El servidor es un programa que recibe una solicitud, realiza el servicio requerido y devuelve los resultados en forma de una respuesta. Generalmente un servidor puede tratar múltiples peticiones (múltiples clientes) al mismo tiempo. 
</p>
            
            <img class='img-fluid' src='assets/img/unidad2-15.jpg' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-14\">🠔 Anterior tema</a>
                    </div>
                </div>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-16\">Siguiente tema →</a>
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
            <h2 class='section-heading'>Definir el concepto de sockets</h2>
            <p class='text-justify'>Un socket, es un método para la comunicación entre un programa del cliente y un programa del servidor en una red. Un socket se define como el punto final en una conexión. Los sockets se crean y se utilizan con un sistema de peticiones o de llamadas de función a veces llamados interfaz de programación de aplicación de sockets (API, application programming interfaz). 
Un socket es también una dirección de Internet, combinando una dirección IP (la dirección numérica única de cuatro partes que identifica a un ordenador particular en Internet) y un número de puerto.
</p>

            
            <img class='img-fluid' src='assets/img/unidad2-16.png' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-16\">🠔 Anterior tema</a>
                    </div>
                </div>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-17\">Siguiente tema →</a>
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
            <h2 class='section-heading'>Explicar el proceso del uso de sockets en aplicaciones Cliente/Servidor</h2>
            <p class='text-justify'>Los sockets permiten implementar una arquitectura cliente-servidor o peer to peer. La comunicación debe ser iniciada por uno de los programas que se denomina programa cliente. El segundo programa espera a que otro inicie la comunicación, por este motivo se denomina programa servidor. </p>
            <p class='text-justify'>Un socket es un proceso o hilo existente en la máquina cliente y en la máquina servidora, que sirve en última instancia para que el programa servidor y el cliente lean y escriban la información. Esta información será la transmitida por las diferentes capas de red. 
Cuando un cliente conecta con el servidor se crea un nuevo socket, de esta forma, el servidor puede seguir esperando conexiones en el socket principal y comunicarse con el cliente conectado, de igual manera se establece un socket en el cliente en un puerto local. 
</p>
            <p class='text-justify'>Una aplicación servidor normalmente escucha por un puerto específico esperando una petición de conexión de un cliente, una vez que se recibe, el cliente y el servidor se conectan de forma que les sea posible comunicarse entre ambos. Durante este proceso, el cliente es asignado a un número de puerto, mediante el cual envía peticiones al servidor y recibe de este las respuestas correspondientes. 
Similarmente, el servidor obtiene un nuevo número de puerto local que le servirá para poder continuar escuchando cada petición de conexión del puerto original. De igual forma une un socket a este puerto local. 
</p>

            
            <img class='img-fluid' src='assets/img/unidad2-17.jpg' alt='...' style='width: 100%' />
            <p></p>
            <p></p>
            <p></p>
            <div class='row'>
                <div class='col-sm'>
                    <div class='d-flex justify-content-end'>
                        <a class='btn btn-primary text-uppercase' href=\"unidad2-16\">🠔 Anterior tema</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</article>"];
        for($i=0; $i<17; $i++) {
            DB::table('unidad2')->insert([
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
