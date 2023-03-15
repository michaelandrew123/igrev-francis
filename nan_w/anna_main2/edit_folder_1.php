<?php include('./layouts/header.php') ?>

    <div class="flex flex-row justify-between text-center mt-4 mb-4 pt-3 pb-3 text-2xl font-bold w-11/12 ml-auto mr-auto border-b-2 border-gray-600/25" >  

        <i class="fa fa-angle-left pointer  " aria-hidden="true"></i>
        보관함
        
    </div>  


    <div class=" mt-4 mb-4 pt-3 pb-3 text-lg  w-11/12 ml-auto mr-auto  " >  
        <form action="#" method="POST">
    
            <table> 
                <tbody>
                <tr  class="hover:border-2 hover:border-blue-600/25 hover:text-blue-500">
                    <td>
                        <input type="radio"  name="edit-folder" />
                        기본 폴더 
                    </td> 
                </tr>
                <tr class="hover:border-2 hover:border-blue-600/25 hover:text-blue-500">
                    <td>
                        <input type="radio" name="edit-folder" />
                        폴더 2 
                    </td> 
                </tr>
                <tr class="hover:border-2 hover:border-blue-600/25 hover:text-blue-500">
                    <td  >
                        <input type="radio" name="edit-folder" />
                        폴더 3 
                    </td> 
                </tr>
                </tbody>
            </table>

        </form>
 
    </div>   

</div> 

<div class="w-full flex justify-center h-full relative">
    <div class=" text-center bg-blue-600  h-auto  w-4/5 text-white p-5 rounded-md absolute top-20 ">
        
        <span class="relative">  
        이동하기
        </span>
    </div>
</div>