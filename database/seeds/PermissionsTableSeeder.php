<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CRUD DE USUARIOS

        Permission::create([
            'name' => 'Navegar Usuarios' ,
            'slug' => 'users.index',
            'description' => 'Listar usuarios del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de Usuario' ,
            'slug' => 'users.show',
            'description' => 'ver el detalle del usuario en el sistema',
        ]);
        Permission::create([
            'name' => 'Edicion de Usuarios' ,
            'slug' => 'users.edit',
            'description' => 'Listar usuarios del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar Usuarios' ,
            'slug' => 'users.destroy',
            'description' => 'Listar usuarios del sistema',
        ]);

        //CRUD DE ROLES
        Permission::create([
            'name' => 'Navegar Roles' ,
            'slug' => 'role.index',
            'description' => 'Listar roles del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle del Rol' ,
            'slug' => 'role.show',
            'description' => 'ver el detalle del Rol en el sistema',
        ]);
        Permission::create([
            'name' => 'Creacion de Roles' ,
            'slug' => 'role.create',
            'description' => 'Listar Roles del sistema',
        ]);
        Permission::create([
            'name' => 'Edicion de Roles' ,
            'slug' => 'role.edit',
            'description' => 'Listar Roles del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar Roles' ,
            'slug' => 'role.destroy',
            'description' => 'Listar usuarios del sistema',
        ]);



        //CRUD DE GRUPOS
                Permission::create([
                    'name' => 'Navegar Grupos' ,
                    'slug' => 'group.index',
                    'description' => 'Listar Grupos del sistema',
                ]);
                Permission::create([
                    'name' => 'Ver detalle del Grupo' ,
                    'slug' => 'group.show',
                    'description' => 'ver el detalle del Grupo en el sistema',
                ]);
                Permission::create([
                    'name' => 'Creacion de grupos' ,
                    'slug' => 'group.create',
                    'description' => 'Crear Grupos del sistema',
                ]);
                Permission::create([
                    'name' => 'Edicion de Grupos' ,
                    'slug' => 'group.edit',
                    'description' => 'Editar Grupos del sistema',
                ]);
                Permission::create([
                    'name' => 'Eliminar Grupos' ,
                    'slug' => 'group.destroy',
                    'description' => 'Eliminar Grupos del sistema',
                ]);

        
                //CRUD DE TAREAS
                Permission::create([
                    'name' => 'Navegar Tareas' ,
                    'slug' => 'task.index',
                    'description' => 'Listar Tareas del sistema',
                ]);
                Permission::create([
                    'name' => 'Ver detalle de la Tarea' ,
                    'slug' => 'task.show',
                    'description' => 'ver el detalle de la Tarea en el sistema',
                ]);
                Permission::create([
                    'name' => 'Creacion de tareas' ,
                    'slug' => 'task.create',
                    'description' => 'Crear Tareas del sistema',
                ]);
                Permission::create([
                    'name' => 'Edicion de Tareas' ,
                    'slug' => 'task.edit',
                    'description' => 'Editar Tareas del sistema',
                ]);
                Permission::create([
                    'name' => 'Eliminar Tareas' ,
                    'slug' => 'task.destroy',
                    'description' => 'Eliminar Tareas del sistema',
                ]);


    }
}
