import AllCategories from './components/AllCategories';
import CreateCategory from './components/CreateCategory';
import EditCategory from './components/EditCategory';

export const routes = [
    {
        name: 'categories',
        path: '/categories',
        component: AllCategories
    },
    {
        name: 'create',
        path: '/create',
        component: CreateCategory
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditCategory
    }
];
