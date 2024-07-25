<?php

namespace App\Providers;

use App\Interfaces\LightBulbs\LightBulbInterface;
use App\Services\LampSocket;
use App\Services\LightBulbs\WhiteLightBulb;
use App\Services\LightBulbs\YellowLightBulb;
use Illuminate\Support\ServiceProvider;

class LightServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
//        Khi có yêu cầu về một đối tượng của LightBulbInterface,
//        Hãy cung cấp một instance của WhiteLightBulb

//        Laravel không tự động tạo instance ngay khi bind.
//        Thay vào đó, nó chỉ "ghi nhớ"  mối quan hệ giữa interface và class.

//        Instance thực sự được tạo ra chỉ khi có yêu cầu sử dụng interface đó (lazy loading).

//        Mỗi khi interface được yêu cầu.
//        Laravel sẽ tạo một instance mới của class đã bind
//        (trừ khi bạn sử dụng singleton thay vì bind).

        $this->app->bind(LightBulbInterface::class,WhiteLightBulb::class);
        // Dòng trên có ý nghĩa là - KHI CÓ YÊU CẦU VỀ MỘT ĐỐI TƯỢNG CỦA LightBulbInterface, HÃY CUNG CẤP MỘT INSTANCE CỦA WhiteLightBulb
        // cái bind này nó kiểu như là đăng ký 1 binding (liên kết) vào container
        // Cũng có thể hiểu như cách chúng ta gọi bất kì 1 method nào mà thực thi, hay có tham số gọi đến LightBulbInterface, thì nó sẽ tự động gọi đến WhiteLightBulb, vì WhiteLightBulb implement LightBulbInterface interface

//        bind()
//        Mỗi lần yêu cầu, một instance mới được tạo ra.
//        Phù hợp khi bạn cần một instance mới mỗi lần sử dụng.
//        $this->app->bind(LightBulbInterface::class,WhiteLightBulb::class);
//        $bulb1 = app(LightBulbInterface::class);
//        $bulb2 = app(LightBulbInterface::class);
//        $bulb1 và $bulb2 là hai instance khác nhau

//        singleton()
//        Chỉ tạo một instance duy nhất và tái sử dụng nó cho mọi yêu cầu tiếp theo.
//        Phù hợp khi bạn muốn dùng chung một instance trong toàn bộ lifecycle của ứng dụng.
//        $this->app->singleton(LightBulbInterface::class,WhiteLightBulb::class);
//        $bulb1 = app(LightBulbInterface::class);
//        $bulb2 = app(LightBulbInterface::class);
//        $bulb1 và $bulb2 là cùng một instance

//        => Đăng ký cách resolve dependency khi cần.

//        Explicit Binding in Service Provider
//        => Liên kết rõ ràng (Explicit Binding) thực sự cần thiết khi cần override instance của bind, còn không thì laravel đã auto bind rồi, không cần phải định nghĩa tại đây
//        $this->app->bind(
//            LampSocket::class,
//            fn($app) => new LampSocket($app->make(LightBulbInterface::class))
//        );
        // Bây giờ chúng ta bỏ implement interface của LightBulbInterface đi và ở LampSocket chúng ta cũng không sử dụng  LightBulbInterface làm tham số ở hàm khởi tạo thì đoạn code trên sẽ làm đúng như cái bind ở trên mà mình vừa giải thích. Đó là khi bất kì method nào mà thực thi, hay có tham số gọi đến LampSocket, nó sẽ khởi tạo một LampSocket với cái đối số của contructor là cái LightBulbInterface interface, thì lúc này nó cũng sẽ gọi thẳng lên thằng bind ở trên đó.
        // Còn nếu mà chúng ta khai báo đầy đủ WhiteLightBulb thực thi LightBulbInterface interface, và Lampsocket với tham số đầu vào hàm khởi tạo là LightBulbInterface interface thì bản chất laravel sẽ tự map cho chúng ta rồi.
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
