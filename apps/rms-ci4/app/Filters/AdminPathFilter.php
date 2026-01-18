<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminFilter implements FilterInterface
{
    private $adminHost = 'admin.esaglobalengineering.com'; // domain admin yang valid

    public function before(RequestInterface $request, $arguments = null)
    {
        $host = $request->getUri()->getHost();
        $path = $request->getUri()->getPath();

        // Jika request menuju /admin tapi host bukan admin.esaglobalengineering.com
        if ($path === 'admin' || strpos($path, 'admin/') === 0) {
            if ($host !== $this->adminHost) {
                return redirect()->to(base_url('/')); // redirect ke homepage
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // nothing
    }
}