<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\DogFoodController;
use App\Http\Controllers\CatFoodController;
use App\Http\Controllers\BirdFoodController;
use App\Http\Controllers\OtherFoodController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\VeterinarycareController;
use App\Http\Controllers\DaycareController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/about', function () {
    return view('about');
});

Route::get('/birdfood', function () {
    return view('birdfood');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/catfood', function () {
    return view('catfood');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/daycare', function () {
    return view('daycare');
});
Route::get('/dogfood', function () {
    return view('dogfood');
});
Route::get('/orderconfirm', function () {
    return view('orderconfirm');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/productsAdmin', function () {
    return view('productsAdmin');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/shopnow', function () {
    return view('shopnow');
});
Route::get('/smallpets', function () {
    return view('smallpets');
});
Route::get('/spaandgrooming', function () {
    return view('spaandgrooming');
});
Route::get('/veterinarycare', function () {
    return view('veterinarycare');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/', function () {
    return view('homepage');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/bookings', function () {
    return view('bookings');
});

Route::get('/orders', function () {
    return view('orders');
});
Route::get('/landing', function () {//not important
    return view('landing');
});
Route::get('/payment', function () {//not important
    return view('payment');
});
Route::get('/confirmation', function () {//not important
    return view('confirmation');
});
Route::get('/pethealth', function () {
    return view('pethealth');
});
Route::get('/settings', function () {//settings
    return view('settings');
});
Route::get('/message', function () {//settings
    return view('message');
});
Route::get('/orderconfirm', function () {//settings
    return view('orderconfirm');
});

Route::get('/backend.admindashboard', function () {
    return view('backend.admindashboard');
});

Route::get('/shipping', function () {
    return view('shipping');
});



Route::get('/backend.admindashboard', function () {
    return view('backend.admindashboard');
})->middleware(['auth', 'verified'])->name('backend.admindashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users',[UserController::class,'loadAllUsers']);
Route::get('/add/user',[UserController::class,'loadAddUserForm']);

Route::post('/add/user',[UserController::class,'AddUser'])->name('AddUser');



Route::get('/managepets',[PetController::class,'loadAllPets']);
Route::get('/addpet',[PetController::class,'loadAddPetForm']);

Route::post('/addpet',[PetController::class,'AddPet'])->name('AddPet');

Route::get('/edit/{id}',[PetController::class,'loadEditForm']);
Route::get('/delete/{id}',[PetController::class,'deletePet']);

Route::post('/editpet',[PetController::class,'EditPet'])->name('EditPet');




// Dog Food Routes (unchanged except for delete)
Route::get('/managedogfood',[DogFoodController::class,'loadAllDogFood']);
Route::get('/addDogFood',[DogFoodController::class,'loadAddDogFoodForm']);
Route::post('/addDogFood',[DogFoodController::class,'AddDogFood'])->name('AddDogFood');
Route::get('/dogfood-edit/{id}', [DogFoodController::class, 'loadDogEditForm'])->name('dogfood.edit');
Route::delete('/dogfood-delete/{id}', [DogFoodController::class, 'deleteDogFood'])->name('dogfood.delete');
Route::post('/editdogfood',[DogFoodController::class,'EditDogFood'])->name('EditDogFood');

// Cat Food Routes (unchanged except for delete)
Route::get('/managecatfood',[CatFoodController::class,'loadAllCatFood']);
Route::get('/addCatFood',[CatFoodController::class,'loadAddCatFoodForm']);
Route::post('/addCatFood',[CatFoodController::class,'AddCatFood'])->name('AddCatFood');
Route::get('/catfood-edit/{id}', [CatFoodController::class, 'loadCatEditForm'])->name('catfood.edit');
Route::delete('/catfood-delete/{id}', [CatFoodController::class, 'deleteCatFood'])->name('catfood.delete');
Route::post('/editcatfood',[CatFoodController::class,'EditCatFood'])->name('EditCatFood');

// Bird Food Routes (unchanged except for delete)
Route::get('/managebirdfood',[BirdFoodController::class,'loadAllBirdFood']);
Route::get('/addBirdFood',[BirdFoodController::class,'loadAddBirdFoodForm']);
Route::post('/addBirdFood',[BirdFoodController::class,'AddBirdFood'])->name('AddBirdFood');
Route::get('/birdfood-edit/{id}', [BirdFoodController::class, 'loadBirdEditForm'])->name('birdfood.edit');
Route::delete('/birdfood-delete/{id}', [BirdFoodController::class, 'deleteBirdFood'])->name('birdfood.delete');
Route::post('/editbirdfood',[BirdFoodController::class,'EditBirdFood'])->name('EditBirdFood');

// Other Food Routes (unchanged except for delete)
Route::get('/manageotherpetfood',[OtherFoodController::class,'loadAllOtherFood']);
Route::get('/addOtherFood',[OtherFoodController::class,'loadAddOtherFoodForm']);
Route::post('/addOtherFood',[OtherFoodController::class,'AddOtherFood'])->name('AddOtherFood');
Route::get('/otherfood-edit/{id}', [OtherFoodController::class, 'loadOtherEditForm'])->name('otherfood.edit');
Route::delete('/otherfood-delete/{id}', [OtherFoodController::class, 'deleteOtherFood'])->name('otherfood.delete');
Route::post('/editotherfood',[OtherFoodController::class,'EditOtherFood'])->name('EditOtherFood');


// Public Routes
Route::get('/dogfood', [DogFoodController::class, 'showPublicDogFood'])->name('dogfood.public');
Route::get('/catfood', [CatFoodController::class, 'showPublicCatFood'])->name('catfood.public');
Route::get('/birdfood', [BirdFoodController::class, 'showPublicBirdFood'])->name('birdfood.public');
Route::get('/otherfood', [OtherFoodController::class, 'showPublicOtherFood'])->name('otherfood.public');



Route::middleware(['auth'])->group(function () {
    // Checkout route
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');
    Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');


    // Cart routes
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
    Route::patch('/cart/update/{key}', [CartController::class, 'updateItem'])->name('cart.update');
    Route::delete('/cart/remove/{key}', [CartController::class, 'removeItem'])->name('cart.remove');
    Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');
});

Route::get('/unAutherize', function () {
    return view('unAutherize');
});

Route::get('/order/{order}/invoice', [OrderController::class, 'invoice'])->name('order.invoice');



// User routes
Route::middleware(['auth'])->group(function () {
    Route::get('/my-orders', [OrderController::class, 'index'])->name('user.orders');
    Route::get('/order/{order}', [OrderController::class, 'show'])->name('order.details');
    Route::get('/order/{order}/confirmation', [OrderController::class, 'confirmation'])->name('order.confirmation');
});

// Admin routes
/*Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/orders', [AdminOrderController::class, 'index'])->name('admin.orders.index');
    Route::get('/orders/{order}', [AdminOrderController::class, 'show'])->name('admin.orders.show');
    Route::patch('/orders/{order}', [AdminOrderController::class, 'update'])->name('admin.orders.update');
});*/

Route::get('/manage-orders', [OrderController::class, 'adminManageOrders'])->name('admin.manage.orders');


Route::get('/confirmation/{id}', [OrderController::class, 'confirmation'])->name('confirmation');

Route::get('/order/{order}/invoice', [OrderController::class, 'invoice'])
    ->name('order.invoice')
    ->middleware('auth');




Route::get('/invoice/download/{id}', [OrderController::class, 'download'])->name('invoice.download');   
Route::get('/invoice/view/{id}', [OrderController::class, 'showInvoice'])->name('invoice.view');

Route::get('/invoice/view/{id}', [OrderController::class, 'showInvoice'])->name('invoice.view');


// Admin Order Management Routes
Route::middleware(['auth'])->group(function () {

    // Order listing
    Route::get('/manageorders', [AdminOrderController::class, 'index'])->name('admin.orders.index');
    
    Route::delete('/orders/{order}', [AdminOrderController::class, 'destroy'])
        ->name('orders.destroy');  
});

// Public routes
Route::post('/veterinary-appointments', [VeterinarycareController::class, 'store'])
    ->name('veterinary.store');

Route::get('/orderconfirm/{appointment}', [VeterinarycareController::class, 'showConfirmation'])
     ->name('orderconfirm');



// Admin routes
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/veterinary-appointments', [VeterinarycareController::class, 'index'])
         ->name('admin.veterinary.index');

    Route::get('/veterinary/add', [VeterinarycareController::class, 'create'])->name('admin.veterinary.create');     
         
    Route::get('/veterinary-appointments/{appointment}', [VeterinarycareController::class, 'show'])
        ->name('admin.veterinary.show');
         
    Route::get('/veterinary-appointments/{appointment}/edit', [VeterinarycareController::class, 'edit'])
         ->name('admin.veterinary.edit');
         
    Route::put('/veterinary-appointments/{appointment}', [VeterinarycareController::class, 'update'])
         ->name('admin.veterinary.update');
         
    Route::delete('/veterinary-appointments/{appointment}', [VeterinarycareController::class, 'destroy'])
         ->name('admin.veterinary.destroy');

    Route::post('/veterinary', [VeterinarycareController::class, 'store'])
        ->name('admin.veterinary.store');


    //daycare

    Route::get('/admin/daycare/confirmation/{daycare}', [DaycarecareController::class, 'showConfirmation'])
     ->name('confirmation');
    Route::prefix('admin/daycare')->group(function () {
    Route::get('/', [DaycareController::class, 'index'])->name('admin.daycare.index');
    Route::get('/create', [DaycareController::class, 'create'])->name('admin.daycare.create');
    Route::post('/daycare', [DaycareController::class, 'store'])->name('daycare.store');
    Route::get('/{daycare}', [DaycareController::class, 'show'])->name('admin.daycare.show');
    Route::get('/{daycare}/edit', [DaycareController::class, 'edit'])->name('admin.daycare.edit');
    Route::patch('/{daycare}', [DaycareController::class, 'update'])->name('admin.daycare.update');
    Route::delete('/{daycare}', [DaycareController::class, 'destroy'])->name('admin.daycare.destroy');
    Route::get('/calendar', [DaycareController::class, 'calendar'])->name('admin.daycare.calendar');
    Route::post('/{daycare}/approve', [DaycareController::class, 'approve'])->name('admin.daycare.approve');
    Route::post('/{daycare}/reject', [DaycareController::class, 'reject'])->name('admin.daycare.reject');
});    
});





require __DIR__.'/auth.php';

