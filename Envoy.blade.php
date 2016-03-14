@servers(['web' => 'root@schoolsbroadcast.org.uk'])

@task('deploy')
    cd /opt/glass
    git pull origin master
    composer install
@endtask
