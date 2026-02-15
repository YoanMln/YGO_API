import { createRouter, createWebHashHistory } from "vue-router";
import DisplayCards from "@/views/DisplayCards.vue";

const router = createRouter({
  history: createWebHashHistory(import.meta.env.Base_URL),
  routes: [{ path: "/", name: "DisplayCards", component: DisplayCards }],
});
export default router;
