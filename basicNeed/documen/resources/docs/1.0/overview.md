# SeeReview

---

- [First Section](#section-1)

<a name="section-1"></a>
## First Section
```php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review;
```

* ReviewsController class extends Controller class

```php
class ReviewsController extends Controller
{
```
    
     * Display a listing of Reviews.
     
     * @return \Illuminate\Http\Response
```php
    public function index()
    {
        if (! Gate::allows('product_category_access')) {
            return abort(401);
        }

        $reviews = Review::with(['product', 'user'])->get();

        return view('frontend.pages.review', compact('reviews'));
    }
    ```
    
     * Store a newly created Review in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
```php  
    public function store(Request $request)
    {
        Review::create($request->all() + ['user_id' => auth()->id()]);
        return redirect()->route('Model.products.show', $request->product_id);
    }
```     
    
     * Remove Review from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
```php   
    public function destroy($id)
    {
        if (! Gate::allows('product_category_delete')) {
            return abort(401);
        }
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('admin.reviews.index');
    }
    

    
     
     
    
    }
}