

@servers(['aws' => '-i sean-dev.pem ubuntu@52.67.103.109'])
@include('vendor/autoload.php')

@task('test')
  echo "Tarea test Ejecutada"
@endtask

@task('ls', ['on' => 'aws'])
  cd /var/www/html
  ls -la
@endtask
