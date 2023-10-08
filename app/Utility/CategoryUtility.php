<?php
/**
 * Created by PhpStorm.
 * User: Aunok
 * Date: 12/19/2019
 * Time: 4:37 PM
 */

namespace App\Utility;

use App\Models\ProjectCategory;

class CategoryUtility
{
    /*when with trashed is true id will get even the deleted items*/
    public static function childrenIds($id, $withTrashed = false)
    {
        $children = CategoryUtility::flat_children($id, $withTrashed = false);

        return !empty($children) ? array_column($children, 'id') : array();
    }

    public static function flatChildren($id, $withTrashed = false, $container = array())
    {
        $children = CategoryUtility::get_immediate_children($id, $withTrashed, true);

        if (!empty($children)) {
            foreach ($children as $child) {
                $container[] = $child;
                $container = CategoryUtility::flat_children($child['id'], $withTrashed, $container);
            }
        }

        return $container;
    }

    /*when with trashed is true id will get even the deleted items*/

    public static function getImmediateChildren($id, $withTrashed = false, $asArray = false)
    {
        $children = $withTrashed ? ProjectCategory::withTrashed()->where('parent_id', $id)->get() : ProjectCategory::where('parent_id', $id)->get();
        $children = $asArray && !is_null($children) ? $children->toArray() : array();

        return $children;
    }

    /*when with trashed is true id will get even the deleted items*/

    public static function deleteCategory($id)
    {
        $category = ProjectCategory::where('id', $id)->first();
        if (!is_null($category)) {
            CategoryUtility::move_children_to_parent($category->id);
            $category->delete();
        }
    }

    public static function moveChildrenToParent($id)
    {
        $childrenIds = CategoryUtility::get_immediate_children_ids($id, true);

        $category = ProjectCategory::withTrashed()->where('id', $id)->first();

        ProjectCategory::whereIn('id', $childrenIds)->update(['parent_id' => $category->parent_id]);
    }

    public static function getImmediateChildrenIds($id, $withTrashed = false)
    {

        $children = CategoryUtility::get_immediate_children($id, $withTrashed, true);

        return !empty($children) ? array_column($children, 'id') : array();
    }
}
