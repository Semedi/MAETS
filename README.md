u
# MAETS



    Proyecto de Aplicaciones WEB
    
    
Ejemplos super utiles de ivan:
https://bitbucket.org/imartinezortiz

Proyecto de ejemplo que es una puta mierda pero al menos esta terminado y depurado: (meeze entrega)
https://drive.google.com/drive/u/1/folders/0B3cM4Ey__NsaWE9xSHB6c18tZ3M

**MINIGUIA DE USO:**

Como usar git:  http://rogerdudler.github.io/git-guide/index.es.html

commit: para  guardar cambios del proyecto (version)
branch: Flujo de trabajo del proyecto, se puede dividir en varias para trabajar de forma paralela, la rama master es la                 principal.


--> Descargar git (hay descarga en el link anterior)
--> Instalar
--> Abrir consola
--> moverte a la carpeta donde quieras trabajar

     $git help ---> ayuda con los comandos de git
     $git help <comando> --> ayuda especifica de un comando
     
    $git init --> convierte una carpeta (vacia) en un repositiorio GIT o la vuelve a inicializar si ya lo tenias
    $git clone https://github.com/Semedi/MAETS.git  --> Clona de la nube(github) y la branch master el proyecto en tu                 directorio
    $git pull --> Has estado trabajando antes y quieres los cambios realizados
             usa este comando para que se actualice automaticamente


    $git status --> mirar los cambios que ha habido

(No puede haber dos usuario utilizando el mismo archivo a la vez)

una vez trabajando, cambias los archivos de cualquier forma...

afectan al commit:

    $git add <archivo> --> añadir un archivo, (se verá reflejado en el commit)
    $git  rm <archivo> --> borrar un archivo, (se verá reflejado en tu comit)
          (se pueden añadir comodin * en vez de <archivo> para aplicarlo a todos los elementos
    $git commit -m "nombre" --> creas una nueva "version" con los cambios realizados
    $git commit -a -m "nombre" --> creas un commit normal pero el -a hace que se apliquen los cambios automaticamente
                              sin que tengas que hacer ningun git add o git rm para indicar al commit lo que has hecho

Una vez has creado tu commit deseas subirlo al repositorio:

     $git push origin master --> Actualizas la nube con tu commit
     

puede ser que al intentar hacer el push a master, otra persona haya cambiado el proyecto a una nueva versión dejando en la que tu trabajas "obsoleta" entonces:

    $git pull
    $git fetch origin  
    
  --> Te bajas los cambios que han subido antes, git lo mezclara con lo tuyo
  
  
  

   
*****BRANCHES*****

Si quieres trabajar sobre otra rama de desarrollo, indepependiente de la original (donde esta la pagina funcional)

    $git branch --> lista las ramas actuales y te muestra en la que estas
    $git branch <nombre> --> crea la rama nombre para añadir un flujo de trabajo
    $git branch checkout <nombre> --> te cambia a la rama de trabajo <nombre>

Cuando cambies de rama de trabajo se te actualiza el proyecto solo, hacer un commit antes para guardar los cambios si estabais trabajando en otra cosa...
 
 
    $git merge <branch> mezcla la rama actual con <branch> git es inteligente y hace los cambios correctos aunque se hayan         solapado versiones y ramas.
    
    
    $git branch -d <nombre> borra la branch <nombre> borrarlas siempre que no se usen o despues de mezclarla con la rama master.





