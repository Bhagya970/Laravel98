<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        

<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
               Id
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
               email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
               Profile photo
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Edit
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
               Delete
              </th>
              
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
         
         @foreach($user as $data)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$data->id}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$data->name}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
               {{$data->email}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
             <img style="height:70px; width:100px"  src="{{asset('storage/images/uploads/' .$data->profile_photo_path)}}"  alt="image"/>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
               <a href="{{ route('users') }}" class="btn success-button"
                    onclick="event.preventDefault();  
                    document.getElementById( 
                      'edit-form-{{$data->id}}').submit();"> 
                 Edit 
                </a>      
                 </td>

                 <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
              <a href="{{ route('users') }}" class="btn btn-danger"
                    onclick="event.preventDefault();  
                    document.getElementById( 
                      'delete-form-{{$data->id}}').submit();"> 
                 Delete  
                </a>             
              </td>
              
              <form id="delete-form-{{$data->id}}"  
                  + action="{{route('users.destroy', $data->id)}}" 
                  method="post"> 
                @csrf @method('DELETE') 
            </form> 
            <form id="edit-form-{{$data->id}}"  
                  + action="{{route('users.edit', $data->id)}}" 
                  method="get"> 
                @csrf @method('EDIT') 
            </form>
        
              </tr>
            @endforeach

          </tbody>    
          </table>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>


          </x-app-layout> 